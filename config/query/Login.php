<?php
require_once("../../config/core/Autoload.php");



class Login extends Conexion{

  private $strKey;
  private $str_usuario;
  private $str_password;


  function __construct(){

    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();

  }

  // insert
  public function login(string $key, string $usuario, string $password){

    try {
      // validador key
      if(base64_decode($key) == 'elnene'){

        $this->str_usuario= $usuario;
        $this->str_password = $password;

        // 1 activo - 0 inactivo;

        $sql = "SELECT nombre_usuario, password FROM usuario WHERE nombre_usuario = ? AND password = ? ";
        $select = $this->conexion->prepare($sql);
        $arrData = array($this->str_usuario, $this->str_password);
        $resLogin = $select->execute($arrData);

        if($resLogin){

          return json_encode(true);

        }else{

          return json_encode(false);

        }


      }else{
        echo json_encode(403);
      } // end validador key

    } catch (\Exception $e) {

      echo json_encode(500);

    }


  }

}
