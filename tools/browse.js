////////////////////////////////////////////////////////////////////////////////
var currentShip = 0;

var shipchange = function() {
  var ship = parseInt(document.getElementById('ship-selector').value);
  if (ship == currentShip) return;
  currentShip = ship;
  //display default ship properties
  for (var i in ship_json[ship]) {
    if (i == "name" || i == "properties") { continue; }
    var field = document.getElementById("ship-" + i.toLowerCase());
    field.textContent = ship_json[ship][i];
  }
  //display hyperspace property modifiers
  var ship_prop = document.getElementById('ship-prop');
  ship_prop.innerHTML = ''; //clear
  for (var i in ship_json[ship].properties) {
    var row = document.createElement('tr');
    row.id = "ship-prop-" + i.toLowerCase();
    var cell_name = document.createElement('td');
    cell_name.textContent = i;
    row.appendChild(cell_name);
    var cell_value = document.createElement('td');
    cell_value.textContent = ship_json[ship].properties[i];
    row.appendChild(cell_value);
    ship_prop.appendChild(row);
  }
};

window.addEventListener('load', function() {
  //Create ship options
  var ship_select = document.getElementById('ship-selector');
  for (var i = 1; i <= Object.keys(ship_json).length; ++i) {
    var option = document.createElement('option');
    option.id = "ship-" + i.toString();
    option.value = i.toString();
    option.innerHTML = ship_json[i].name;
    ship_select.appendChild(option);
  }

  ship_select.addEventListener('change', function() { shipchange(); });
  ship_select.addEventListener('keyup', function() { shipchange(); });
  shipchange();
});
////////////////////////////////////////////////////////////////////////////////
var categories = [];
var items = [];
var currentCategory = 0;
var currentItem = 0;

var categorychange = function() {
  var item_select = document.getElementById('item-selector');
  var category = document.getElementById('category-selector').value;
  if (category == currentCategory) return;
  item_select.innerHTML = '';
  currentCategory = category;
  var catindex = categories.indexOf(category);
  for (var i in items[catindex]) {
    var option = document.createElement('option');
    option.id = 'item-' + items[catindex][i].name.toLowerCase().replace(/\s+/g, '');
    option.textContent = items[catindex][i].name;
    item_select.appendChild(option);
  }
  itemchange();
}

var itemchange = function() {
  var item = document.getElementById('item-selector').value;
  if (item == currentItem) return;
  currentItem = item;
  var catindex = categories.indexOf(currentCategory);
  var itemindex = -1;
  for (var i in items[catindex]) {
    if (items[catindex][i].name == currentItem) {
      itemindex = i;
    }
  }
  var desiredData = ["long_description", "buy_price", "sell_price", "exp_required", "ships_allowed", "max", "min_ammo"]
  for (var i in desiredData) {
    var target = document.getElementById('item-' + desiredData[i]);
    target.textContent = items[catindex][itemindex][desiredData[i]];
  }
  var target = document.getElementById('item-types');
  target.textContent = Object.keys(items[catindex][itemindex]['types']).join(', ');


  var item_prop = document.getElementById('item-prop');
  item_prop.innerHTML = ''; //clear
  for (var i in items[catindex][itemindex].properties) {
    var row = document.createElement('tr');
    row.id = "item-prop-" + i.toLowerCase();
    var cell_name = document.createElement('td');
    cell_name.textContent = i;
    row.appendChild(cell_name);
    var cell_value = document.createElement('td');
    cell_value.textContent = items[catindex][itemindex].properties[i];
    row.appendChild(cell_value);
    item_prop.appendChild(row);
  }
}

window.addEventListener('load', function() {
  //gather item categories, put items into category groups
  for (var i in item_json) {
    var catindex = -1;
    if (Object.keys(item_json[i].categories).length > 0) {
      if (categories.indexOf(Object.keys(item_json[i].categories)[0]) < 0) {
        categories.push(Object.keys(item_json[i].categories)[0]);
      }
      catindex = categories.indexOf(Object.keys(item_json[i].categories)[0]);
    } else {
      if (categories.indexOf('None') < 0) {
        categories.push('None');
      }
      catindex = categories.indexOf('None');
    }
    if (items[catindex] == null) {
      items[catindex] = [];
    }
    items[catindex].push(item_json[i]);
  }
  //create category options
  var cat_select = document.getElementById('category-selector');
  for (var i in categories) {
    var option = document.createElement('option');
    option.id = 'category-' + categories[i].toLowerCase().replace(/\s+/g, '');
    option.textContent = categories[i];
    cat_select.appendChild(option);
  }

  var item_select = document.getElementById('item-selector');
  item_select.addEventListener('change', function() { itemchange(); });
  item_select.addEventListener('keyup', function() { itemchange(); });
  cat_select.addEventListener('change', function() { categorychange(); });
  cat_select.addEventListener('keyup', function() { categorychange(); });
  categorychange();
});