var AjaxHandler = {
  request: function(method, url, callback, post) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== 4) return;

      callback(xhr.status, xhr.responseText, xhr.responseXML);
    }
    xhr.open(method, url, true);
    if (method !== 'POST') post = null;
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
  this.element = null;

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

  // Bring absolute properties to the front
  properties.sort(function(a, b) {
    var a_str = typeof a.value === 'string';
    var b_str = typeof b.value === 'string';

    if (b_str && !a_str) return 1;

    return a.value > b.value;
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
    return a.name > b.name;
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
    this.activeItemList = new ListData([], 'active-items', document.getElementById('builder-parent'), function(item) {
      var category;
      for (var c in item.categories)
        category = c;

      var display = item.name + " (" + category ;
      var is_sig = false;
      for (var type in item.types) {
        if (type == 'Signature')
          is_sig = true;
      }
      if (is_sig)
        display += ' / Signature';

      display += ')';
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

  PageHandler.saveToHash();

  PageHandler.display();
};

ShipBuilder.prototype.display = function() {
  while(this.element.firstChild)
    this.element.removeChild(this.element.firstChild);

  var table = document.getElementById('property-table');
  if (!table) {
    table = document.createElement('table');
    table.id = 'property-table';
    z = document.createAttribute('cellspacing');
    z.value = '0';
    table.setAttributeNode(z);
    this.element.appendChild(table);
  }

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

var PageHandler = {
  CONTAINER_ID: 'builder',

  builder: null,
  lastHash: '',

  handleLoad: function() {
    PageHandler.builder = new ShipBuilder(document.getElementById('builder-parent'));

    var loader = new DataLoader();

    loader.load(function(err) {
      if (err) {
        console.error(err);
        return;
      }

      PageHandler.builder.categories = loader.categories;
      PageHandler.builder.typeValidator = new TypeValidator(loader.types, PageHandler.builder.getActiveItems().data);

      PageHandler.display();
      PageHandler.loadFromHash();
    });
  },

  loadFromHash: function() {
    PageHandler.builder.clearActiveItems();

    var hash = window.location.hash.substring(1);
    if (hash.length <= 0) return;

    var decoded = window.atob(hash);
    var hashes = decoded.split(';');
    hashes.forEach(function(itemHash) {
      if (itemHash.length <= 0) return;

      var item = PageHandler.builder.getItemByHash(parseInt(itemHash));
      if (!item) {
        console.error('Could not load item from hash', itemHash);
        return;
      }

      PageHandler.builder.addActive(item.name);
    });
  },

  saveToHash: function() {
    var items = PageHandler.builder.activeItemList.data;
    var hash = '';
    var itemList = '';

    items.forEach(function(item) {
      itemList += item.name.hashCode() + ';';
    });

    hash = window.btoa(itemList);

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
      category_container.width = 70;
      parent.appendChild(category_container);
      category_container.addEventListener('change', function() {
        self.builder.addActive(this.value);
        this.value = '';
        PageHandler.builder.update();
      });
    }

    return category_container;
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
        return a.categories[category] > b.categories[category];
      });

      var category_container = PageHandler.getCategoryContainer(category, container);

      category_items.forEach(function(item) {
        var option = document.createElement('option');

        if (!PageHandler.builder.typeValidator.isValidItem(item)) return;

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