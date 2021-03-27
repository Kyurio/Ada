<?php

require_once("../../config/query/Task.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $objTask = new Task();

  // request post
  $data = json_decode(file_get_contents("php://input"), true);


  // estado 0 pendiente, 1 pausadom, 2 terminado.
  $id_tarea = $data['id_tarea'];
  $tarea =  $data['str_tarea'];
  $descripcion =  $data['str_descripcion'];
  $usuario = $data['int_usuario'];
  $estado = 0;

  // key de seguridad
  $key = base64_encode("elnene");

  if($insert  = $objTask->update_tarea($key, $tarea, $descripcion, $usuario,  $estado, $id_tarea)){
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
