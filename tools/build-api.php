<?php
  $item_source = 'https://raw.githubusercontent.com/Ceiu/hyperspace-items/master/items.json';
  $ship_source = 'https://raw.githubusercontent.com/jstnryan/hyperspace-ships/master/ships.json';

  if(isset($_GET['q'])) {
    switch ($_GET['q']) {
      case "items":
        echo json_encode(json_decode(file_get_contents($item_source), true)['items']);
        break;
      case "types":
        echo json_encode(json_decode(file_get_contents($item_source), true)['types']);
        break;
      case "ships":
        echo json_encode(json_decode(file_get_contents($ship_source), true)['ships']);
        break;
      default:
        echo "you fucked up";
    }
  } else {
?>
<html><body>
<p>This API exposes the following data:</p>
<ul>
  <li><a href="?q=items">?q=items</a> - Returns a JSON encoded string of all current items and their properties.</li>
  <li><a href="?q=items">?q=types</a> - Returns a JSON encoded string of all current item categories and their maximum capacities.</li>
  <li><a href="?q=items">?q=ships</a> - Returns a JSON encoded string of all current ship types and their default (initial) properties.</li>
</ul>
</body></html>
<?php
  }