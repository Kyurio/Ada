<?php

require_once("../../config/core/Conexion.php");


$data = json_decode(file_get_contents("php://input"), true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $map = $data['map_url'];

  $stmt = $conn->prepare("INSERT INTO mapa (url) VALUES (?)");
  $stmt->bind_param("s", $map);

  if($stmt->execute()){

    echo json_encode(true);

  }else{

    echo json_encode(false);
  }


  $stmt->close();
  $conn->close();


}else{

  die("no es metodo post");

}
