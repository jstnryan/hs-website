var ship_select = document.getElementById('ship-selector');
currentShip = 0;

//Create ship options
for (var i = 1; i <= Object.keys(ship_json).length; ++i) {
  var option = document.createElement('option');
  option.id = "ship-" + i.toString();
  option.value = i.toString();
  option.innerHTML = ship_json[i].name;
  ship_select.appendChild(option);
}

var changeFunc = function() {
  var ship = parseInt(document.getElementById('ship-selector').value);
  if (ship == currentShip) return;
  currentShip = ship;
  //display default ship properties
  for (var i = 0; i <= Object.keys(ship_json[ship]).length - 1; ++i) {
    var key = Object.keys(ship_json[ship])[i];
    //if (key == null) { console.log("Null key: " + key + ", value: " + i); }
    if (key == "name" || key == "properties") { continue; }
    var field = document.getElementById("ship-" + key.toLowerCase());
    //if (field == null) { console.log("Undefined field: " + "ship-" + key.toLowerCase()); }
    field.textContent = ship_json[ship][key]; //field.innerHTML = ship_json[ship][key];
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

//event handlers
window.addEventListener('load', function() {
  ship_select.addEventListener('change', function() {
    changeFunc();
  });
  ship_select.addEventListener('keyup', function() {
    changeFunc();
  });
  changeFunc();
});