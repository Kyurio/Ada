<?php

require_once("../../config/query/Task.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Sanitize POST
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $objTask = new Task();

  // request post
  $data = json_decode(file_get_contents("php://input"), true);

  $id = $data['id_tarea'];
  // key de seguridad
  $key = base64_encode("elnene");

  if($delete  = $objTask->delete_tarea($key, $id)){
    // redireccionar
    if ($delete) {

      echo json_encode($delete);

    }else{
      // error al direccionar
      echo json_encode(false);
    }

  }else{

    Err(500);

  }
}
