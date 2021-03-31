<?php

require_once("../../config/query/Login.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitize POST
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $objLogin= new Login();

  // request post
  $data = json_decode(file_get_contents("php://input"), true);

  $usuario =  $data['str_usuario'];
  $password =  $data['str_password'];

  // key de seguridad
  $key = base64_encode("elnene");


  if($insert  = $objLogin->login($key, $usuario, $password)){
    // redireccionar
    if ($insert == 403) {

      Err(403);

    }else{

      echo json_encode($insert);

    }

  }else{
    // error al direccionar
    echo json_encode(false);
  }

}else{

  Err(500);

}
