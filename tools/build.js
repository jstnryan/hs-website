var AjaxHandler = {
  request: function(method, url, callback, post) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== 4) return;

      callback(xhr.status, xhr.responseText, xhr.responseXML);
    }
    xhr.open(method, url, true);

    if (method !== 'POST') {
      post = null;
    } else {
      xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
      post = JSON.stringify(post);
    }

    xhr.send(post);
  }
};

String.prototype.hashCode = function() {
  var hash = 0, i, chr, len;
  if (this.length == 0) return hash;
  for (i = 0, len = this.length; i < len; i++) {
    chr   = this.charCodeAt(i);
    hash  = ((hash << 5) - hash) + chr;
    hash |= 0;
  }
  return hash;
};

function ListData(data, id, parent, displayFunc) {
  this.data = data;
  this.parent = parent;
  this.id = id;
  this.element = null;
  this.displayFunc = displayFunc;
  if (!this.displayFunc) {
    this.displayFunc = function(item) {
      return item;
    };
  }
}

ListData.prototype.getElement = function() {
  var element = document.getElementById(this.id);

  if (!element) {
    element = document.createElement('ul');
    element.id = this.id;
    this.parent.appendChild(element);
  }
  return element;
};

ListData.prototype.addItem = function(item) {
  this.data.push(item);
  this.display();
};

ListData.prototype.removeItem = function(item) {
  for (var i = 0; i < this.data.length; ++i) {
    if (this.data[i] == item) {
      this.data.splice(i, 1);
      break;
    }
  }
  this.display();
};

ListData.prototype.clear = function() {
  this.data.length = 0;
  this.display();
};

ListData.prototype.display = function() {
  this.element = this.getElement();

  while (this.element.firstChild)
    this.element.removeChild(this.element.firstChild);

  var self = this;
  this.data.forEach(function(item) {
    var li = document.createElement('li');
    li.innerHTML = self.displayFunc(item);
    self.element.appendChild(li);

    li.addEventListener('click', function() {
      self.removeItem(item);
      PageHandler.builder.update();
      PageHandler.saveToHash();
    });
  });
};

function DataLoader() {
  this.categories = {};
  this.types = {};
}

DataLoader.prototype = {
  load: function(callback) {
    var self = this;
    var loadCount = 0;

    this.loadItems(function(err, items) {
      if (err) {
        callback(err);
        return;
      }

      self.loadCategories(items);
      if (++loadCount == 2)
        callback(null);
    });

    this.loadTypes(function(err, types) {
      if (err) {
        callback(err);
        return;
      }

      self.types = types;
      if (++loadCount == 2)
        callback(null);
    });
  },
  loadItems: function(callback) {
    AjaxHandler.request('GET', 'build-api.php?q=items', function(status, responseText) {
      if (status != 200) {
        callback(new Error('Could not fetch items from API.'));
        return;
      }

      var items = JSON.parse(responseText);

      if (!items || items.length == 0) {
        callback(new Error('Could not parse JSON from API response while fetching items.'));
        return;
      }

      callback(null, items);
    });
  },
  loadCategories: function(items) {
    if (!items || items.length == 0)
      throw new Error('Could not create categories from items (no items).');

    var self = this;
    items.forEach(function(item) {
      var category;
      for (var c in item.categories)
        category = c;

      if (!category || category == 'Ammunition') return;

      if (!self.categories[category])
        self.categories[category] = [];

      self.categories[category].push(item);
    });
  },
  loadTypes: function(callback) {
    AjaxHandler.request('GET', 'build-api.php?q=types', function(status, responseText) {
      if (status != 200) {
        callback(new Error('Could not fetch types from API.'));
        return;
      }

      var types = JSON.parse(responseText);
      if (!types || types.length == 0) {
        callback(new Error('Could not parse JSON from API response while fetching types.'));
        return;
      }

      callback(null, types);
    });
  }
};

function TypeValidator(types, activeItems) {
  this.types = types;
  this.activeItems = activeItems;
}

TypeValidator.prototype.getItemTypes = function(item) {
  var types = [];
  for (var type in item.types) {
    types.push({
      name: type,
      count: item.types[type]
    });
  }
  return types;
};

TypeValidator.prototype.isValidItem = function(item) {
  var types = this.getItemTypes(item);
  var usedTypes = {};

  this.activeItems.forEach(function(item) {
    for (var type in item.types) {
      if (!usedTypes[type])
        usedTypes[type] = 0;
      usedTypes[type] += item.types[type];
    }
  });

  for (var i = 0; i < types.length; ++i) {
    var type = types[i];

    if (!this.types[type.name])
      return false;

    if (!usedTypes[type.name])
      usedTypes[type.name] = 0;

    if (usedTypes[type.name] + type.count > this.types[type.name]) {
      // This item isn't valid with this build
      return false;
    }
  }

  return true;
};

function ShipBuilder(parent) {
  this.id = 'ship-builder';
  this.parent = parent;
  this.element = document.createElement('div');
  this.element.id = this.id;
  this.parent.appendChild(this.element);

  this.categories = {};
  this.typeValidator = null;

  this.properties = [];

  this.activeItemList = null;
}

ShipBuilder.prototype.getItemFromCategory = function(name, category) {
  var category_items = this.categories[category];
  for (var i = 0; i < category_items.length; ++i) {
    var item = category_items[i];
    if (item.name == name)
      return item;
  }
  return null;
};

ShipBuilder.prototype.getItemByName = function(name) {
  for (var category in this.categories) {
    var item = this.getItemFromCategory(name, category);
    if (item)
      return item;
  }
  return null;
};

ShipBuilder.prototype.getItemByHash = function(hash) {
  for (var category in this.categories) {
    var items = this.categories[category];
    for (var i = 0; i < items.length; ++i) {
      var item = items[i];
      if (item.name.hashCode() == hash)
        return item;
    }
  }
  return null;
}

ShipBuilder.prototype.calculateProperties = function() {
  var items = this.activeItemList.data;
  var self = this;

  var properties = [];

  items.forEach(function(item) {
    for (var property in item.properties) {
      properties.push({
        name: property,
        value: item.properties[property]
      });
    }
  });

  // Bring absolute properties to the front and ignore properties to the end
  properties.sort(function(a, b) {
    if (typeof a.value === 'string' && a.value.indexOf('!') >= 0)
      return 1;
    if (typeof b.value === 'string' && b.value.indexOf('!') >= 0)
      return -1;

    if (typeof a.value === 'string' && typeof b.value === 'string')
      return a.value.localeCompare(b.value);

    if (typeof a.value === 'string' && typeof b.value !== 'string')
      return -1;

    if (typeof b.value === 'string' && typeof a.value !== 'string')
      return 1;

    return a.value - b.value;
  });

  for (var i = 0 ; i < properties.length; ++i) {
    var property = properties[i].name;
    var value = properties[i].value;
    var current = null;

    for (var j = 0; j < self.properties.length; ++j) {
      if (self.properties[j].name == property) {
        current = self.properties[j];
        break;
      }
    }

    if (!current) {
      current = {
        name: property,
        value: 0
      };
      self.properties.push(current);
    }

    if (typeof value === 'number') {
      current.value += value;
    } else {
      var property_type = value[0];
      if (property_type == '=') {
        var start_index = 1;
        if (value[1] == '!')
          start_index = 2;
        current.value = parseInt(value.substring(start_index));
      } else {
        console.error('Unknown property_type:', property_type);
      }
    }
  }

  this.properties.sort(function(a, b) {
    return a.name.localeCompare(b.name);
  });
};

ShipBuilder.prototype.getPropertyElement = function(property, parent) {
  var element = document.getElementById(property);

  if (!element) {
    element = document.createElement('tr');
    element.id = property;
    parent.appendChild(element);
  }

  return element;
};

ShipBuilder.prototype.getActiveItems = function() {
  if (!this.activeItemList) {
    this.activeItemList = new ListData([], 'active-items', this.element, function(item) {
      var category;
      for (var c in item.categories)
        category = c;

      var display = item.name + " (";
      var types = '';
      for (var type in item.types) {
        if (types.length > 0)
          types += ' / ';
        if (item.types[type] != 1)
          types += item.types[type] + ' ';
        types += type;
      }
      display += types + ')';
      return display;
    });
  }
  return this.activeItemList;
};

ShipBuilder.prototype.addActive = function(item_name) {
  this.getActiveItems();

  var item = this.getItemByName(item_name);
  if (item) {
    this.activeItemList.addItem(item);

    PageHandler.saveToHash();

    this.update();
  }
};

ShipBuilder.prototype.clearActiveItems = function() {
  var active = this.getActiveItems();

  active.clear();
};

ShipBuilder.prototype.update = function() {
  this.properties = [];

  if (!this.element) {
    this.element = document.createElement('div');
    this.element.id = this.id;
    this.parent.appendChild(this.element);
  }

  this.calculateProperties();

  this.display();

  PageHandler.display();

  var shortenDisplay = document.getElementById('shorten-display');
  if (shortenDisplay)
    shortenDisplay.innerHTML = '';
};

ShipBuilder.prototype.display = function() {
  var table = document.getElementById('property-table');
  if (!table) {
    table = document.createElement('table');
    table.id = 'property-table';
    z = document.createAttribute('cellspacing');
    z.value = '0';
    table.setAttributeNode(z);
    this.element.appendChild(table);
  }

  while(table.firstChild)
    table.removeChild(table.firstChild);

  for (var i = 0; i < this.properties.length; ++i) {
    var property = this.properties[i].name;
    var value = this.properties[i].value;

    var element = this.getPropertyElement(property, table);
    var property_td = document.createElement('td');
    var value_td = document.createElement('td');

    property_td.className = 'property';

    property_td.innerHTML = property;
    value_td.innerHTML = value;

    element.appendChild(property_td);
    element.appendChild(value_td);
  }
};

function ShipItemsLoader(data) {
  this.data = data;
  this.ship = 0;
  this.items = [];
}

ShipItemsLoader.prototype = {
  load: function() {
    this.data = this.data.trim();

    if (!this.loadShip())
      return false;

    this.loadItems();

    return true;
  },

  loadShip: function() {
    this.data = this.data.replace(/(-|\+|\||\n)/g, '');

    var ships = [ "Warbird", "Javelin", "Spider", "Leviathan", "Terrier", "Weasel", "Lancaster", "Shark" ];
    var shipStr = ships.join('|');
    var shipRE = new RegExp('^\\s*(' + shipStr + ')\\s');

    var ship = shipRE.exec(this.data);

    if (!ship)
      return false;

    this.data = this.data.substring(ship[1].length + 1);
    this.data = this.data.trim();
    this.ship = ships.indexOf(ship[1]) + 1;

    return true;
  },

  loadItems: function() {
    var items = this.data.split(', ');

    for (var i = 0; i < items.length; ++i) {
      var item = items[i].trim();
      var countRE = /^([0-9])*\s(.+)$/;
      var result = countRE.exec(item);
      var count = 1;
      var itemName = item;

      if (result) {
        count = parseInt(result[1]);
        itemName = result[2].trim();
      }

      for (var j = 0; j < count; ++j)
        this.items.push(itemName);
    }
  },

  display: function(builder) {
    builder.clearActiveItems();

    document.getElementById('ship-selector').value = this.ship.toString();

    PageHandler.display();

    for (var i = 0; i < this.items.length; ++i)
      builder.addActive(this.items[i]);

    builder.update();
  }
};

var PageHandler = {
  CONTAINER_ID: 'category-container',

  builder: null,
  lastHash: '',

  currentShip: 1,

  createShipSelector: function() {
    var container = document.getElementById('ship-container');
    var select = document.createElement('select');
    select.id = 'ship-selector';

    var ShipNames = [ "Warbird", "Javelin", "Spider", "Leviathan", "Terrier", "Weasel", "Lancaster", "Shark" ];
    for (var i = 1; i <= 8; ++i) {
      var option = document.createElement('option');
      option.id = i.toString();
      option.value = i.toString();
      option.innerHTML = ShipNames[i - 1];
      select.appendChild(option);
    }

    var changeFunc = function() {
      var ship = parseInt(document.getElementById('ship-selector').value);
      if (ship == PageHandler.currentShip) return;
      PageHandler.currentShip = ship;
      if (PageHandler.builder)
        PageHandler.builder.clearActiveItems();
      PageHandler.builder.update();

      PageHandler.saveToHash();
      PageHandler.display();
    };

    select.addEventListener('change', function() {
      changeFunc();
    });

    select.addEventListener('keyup', function() {
      changeFunc();
    });

    container.appendChild(select);
  },

  toggleShipLoader: function() {
    var container = document.getElementById(PageHandler.CONTAINER_ID).parentNode;
    var shipitemsLoader = document.getElementById("shipitems-loader-container");
    //var style = container.style.display;
    var style = shipitemsLoader.style.display;

    if (style == 'block') {
      //container.style.display = 'block';
      shipitemsLoader.style.display = 'none';
      document.getElementById("shipitems-text").value = '';
    } else {
      //container.style.display = 'none';
      shipitemsLoader.style.display = 'block';
    }
  },

  handleLoad: function() {
    PageHandler.createShipSelector();

    var loadDisplayBtn = document.getElementById("load-button");
    loadDisplayBtn.addEventListener('click', function() {
      PageHandler.toggleShipLoader();
    });

    var loadBtn = document.getElementById("shipitems-load");
    loadBtn.addEventListener('click', function() {
      var data = document.getElementById("shipitems-text").value;

      if (data) {
        var loader = new ShipItemsLoader(data);

        if (loader.load())
          loader.display(PageHandler.builder);
      }

      PageHandler.toggleShipLoader();
    });

    var cancelBtn = document.getElementById("shipitems-cancel");
    cancelBtn.addEventListener('click', function() {
      PageHandler.toggleShipLoader();
    });

    PageHandler.builder = new ShipBuilder(document.getElementById(PageHandler.CONTAINER_ID).parentNode);
    PageHandler.builder.getActiveItems().display();
    PageHandler.builder.update();

    var loader = new DataLoader();

    loader.load(function(err) {
      if (err) {
        console.error(err);
        return;
      }

      PageHandler.builder.categories = loader.categories;
      PageHandler.builder.typeValidator = new TypeValidator(loader.types, PageHandler.builder.getActiveItems().data);

      PageHandler.createShortener();

      PageHandler.display();
      PageHandler.loadFromHash();
    });
  },

  createShortener: function() {
    var shortener = document.createElement('div');
    shortener.id = 'shortener';

    var shortenBtn = document.createElement('button');
    shortenBtn.id = 'shorten-btn';
    shortenBtn.innerHTML = 'Shorten Link';

    var shortenDisplay = document.createElement('div');
    shortenDisplay.id = 'shorten-display';

    shortener.appendChild(shortenBtn);
    shortener.appendChild(shortenDisplay);

    document.getElementById(PageHandler.CONTAINER_ID).parentNode.appendChild(shortener);

    shortenBtn.addEventListener('click', function() {
      var active = PageHandler.builder.activeItemList.data.length;
      if (active > 0) {
        var MinShortenerLength = 50;

        if (window.location.href.length < MinShortenerLength) {
          shortenDisplay.innerHTML = 'Error: The URL is already short enough.';
          shortenDisplay.className = 'error';
        } else {
          AjaxHandler.request('POST', 'api/shorten', function(status, responseText) {
            var response = JSON.parse(responseText);

            if (status != 200 || !response.short_url) {
              var error = 'Could not connect to shortener API.';

              if (response.error)
                error = response.error;

              shortenDisplay.innerHTML = 'Error: ' + error;
              shortenDisplay.className = 'error';
            } else {
              shortenDisplay.innerHTML = response.short_url;
              shortenDisplay.className = 'shorten';
            }
          }, {
            url: window.location.href
          });
        }
      } else {
        shortenDisplay.innerHTML = 'Error: You didn\'t build a ship.';
        shortenDisplay.className = 'error';
      }
    });
  },

  loadFromHash: function() {
    PageHandler.builder.clearActiveItems();

    var hash = window.location.hash.substring(1);
    if (hash.length <= 0) return;

    var decoded = window.atob(hash);
    var hashes = decoded.split(';');
    var ship = 0;
    hashes.forEach(function(itemHash) {
      if (itemHash.length <= 0) return;
      if (ship == 0) {
        ship = parseInt(itemHash);
        return;
      }

      var item = PageHandler.builder.getItemByHash(parseInt(itemHash));
      if (!item) {
        console.error('Could not load item from hash', itemHash);
        return;
      }

      PageHandler.builder.addActive(item.name);
    });

    if (ship != 0) {
      PageHandler.currentShip = ship;
      var selector = document.getElementById('ship-selector');
      selector.value = ship;
    }
  },

  saveToHash: function() {
    var items = PageHandler.builder.activeItemList.data;
    var hash = '';
    var itemList = '';

    items.forEach(function(item) {
      itemList += item.name.hashCode() + ';';
    });

    var shipStr = '';
    if (items.length > 0)
      shipStr = PageHandler.currentShip.toString() + ";";

    hash = window.btoa(shipStr + itemList);

    var location = window.location.href;
    var hashIndex = location.indexOf('#');
    if (hashIndex >= 0)
      location = location.substr(0, hashIndex);
    PageHandler.lastHash = '#' + hash;
    window.location.replace(location + '#' + hash);
  },

  getCategoryContainer: function(category, parent) {
    var category_container = document.getElementById(category + '-container');
    var self = this;
    if (!category_container) {
      category_container = document.createElement('select');
      category_container.id = category + '-container';
      category_container.className = 'category';
      parent.appendChild(category_container);
      category_container.addEventListener('change', function() {
        self.builder.addActive(this.value);
        this.value = '';
        PageHandler.builder.update();
      });
    }

    return category_container;
  },

  canUseItem: function(item) {
    if (!PageHandler.builder.typeValidator.isValidItem(item)) return false;

    var allowed = false;
    for (var i = 0; i < item.ships_allowed.length; ++i) {
      if (item.ships_allowed[i] == PageHandler.currentShip) {
        allowed = true;
        break;
      }
    }
    if (!allowed) return false;

    var active = PageHandler.builder.activeItemList.data;
    var count = 1;

    active.forEach(function(currentItem) {
      if (currentItem.name == item.name)
        count++;
    });

    return count <= item.max;
  },

  display: function() {
    PageHandler.clearDisplay();

    var container = document.getElementById(PageHandler.CONTAINER_ID);

    for (var category in PageHandler.builder.categories) {
      var category_container = PageHandler.getCategoryContainer(category, container);
      var option = document.createElement('option');
      option.value = '';
      option.innerHTML = category;
      category_container.appendChild(option);
    }

    for (var category in PageHandler.builder.categories) {
      var category_items = PageHandler.builder.categories[category];

      category_items.sort(function(a, b) {
        return a.categories[category] - b.categories[category];
      });

      var category_container = PageHandler.getCategoryContainer(category, container);

      category_items.forEach(function(item) {
        var option = document.createElement('option');

        if (!PageHandler.canUseItem(item)) return;

        option.value = item.name;
        option.innerHTML = item.name;

        category_container.appendChild(option);
      });
    }
  },

  clearDisplay: function() {
    for (var category in PageHandler.builder.categories) {
      var category_container = document.getElementById(category + '-container');
      if (category_container) {
        while (category_container.firstChild)
          category_container.removeChild(category_container.firstChild);
      }
    }
  }
};

window.addEventListener('load', PageHandler.handleLoad);
window.addEventListener('hashchange', function() {
  if (window.location.hash != PageHandler.lastHash) {
    PageHandler.loadFromHash();
    PageHandler.lastHash = window.location.hash;
  }
});