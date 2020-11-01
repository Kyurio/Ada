<?php
require_once("../../config/query/Mapa.php");
require_once("../../config/core/Autoload.php");


$objMapa = new Mapa();


  $data = json_decode(file_get_contents("php://input"), true);
  $map = $data['map_url'];

  $insert  = $objMapa->insert_mapa($map);

  echo $insert;


?>
