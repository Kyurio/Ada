<?php

require_once("../../config/query/Task.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  $objTask = new Task();



  if($select  = $objTask->listar_tareas()){
    // redireccionar
    if ($select) {

      echo json_encode($select);

    }

  }else{
    // error al direccionar
    echo json_encode(false);
  }

}else{

  Err(500);

}
