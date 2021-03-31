<?php

require_once("../../config/query/Usuario.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");

// echo $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitize POST
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $objUsers = new Usuario();

  // request post
  $data = json_decode(file_get_contents("php://input"), true);

  // key de seguridad
  $key = base64_encode("elnene");
  $nombre = $data['str_usuario'];
  $password = $data['str_password'];
  $correo  = $data['str_correo'];

  if($insert  = $objUsers->insert_usuario($key, $nombre, $password, $correo)){
    // redireccionar
    echo json_encode($insert);

  }else{
    // error al direccionar
    echo false;
  }

}else{

  Err(500);

}
