<?php

require_once("../../config/query/Usuario.php");
require_once("../../config/core/Autoload.php");
require_once("../../extends/redirect.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  $objUsers= new Usuario();

  if($select  = $objUsers->delete_task()){
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
