<?php
  $source = 'https://raw.githubusercontent.com/Ceiu/hyperspace-items/master/items.json';

  if(isset($_GET['q'])) {
    switch ($_GET['q']) {
      case "items":
        echo json_encode(json_decode(file_get_contents($source), true)['items']);
        break;
      case "types":
        echo json_encode(json_decode(file_get_contents($source), true)['types']);
        break;
      default:
        echo "you fucked up";
    }
  }