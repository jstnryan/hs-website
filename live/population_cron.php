<?php
  require_once('asss_ping.php');
  require_once('pop-db_auth.php');

  $pop = new ServerPopulation("162.248.95.143", 5005);
  //print_r($pop);

  try {
    $conn = new PDO("mysql:host=$pop_hostname;dbname=$pop_database", $pop_username, $pop_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDO::ERRMODE_SILENT, PDO::ERRMODE_WARNING, PDO::ERRMODE_EXCEPTION

    $stmt = $conn->prepare('INSERT INTO population VALUES(:time, :total, :playing, :arenas)');
    $stmt->bindParam(':time', toDateTime($pop->last_time), PDO::PARAM_STR);
    $stmt->bindParam(':total', $pop->get_server_total(), PDO::PARAM_INT);
    $stmt->bindParam(':playing', $pop->get_server_playing(), PDO::PARAM_INT);
    $stmt->bindParam(':arenas', json_encode($pop->arenas), PDO::PARAM_STR);
    $stmt->execute();
  } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
  //echo 'yay!';

  function toDateTime($unixTimestamp){
      return date("Y-m-d H:i:s", $unixTimestamp);
  }