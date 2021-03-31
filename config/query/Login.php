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

        $this->str_usuario = $usuario;
        $this->str_password = $password;

        // query
        $sql  =  ("SELECT * FROM usuario");
        $stmt =  $this->conexion->query($sql);
        $row  =  $stmt->fetchAll();
        if ($row) {
          foreach($row as $key) {
            if ($this->str_usuario  === $key['nombre_usuario'] && $this->str_password === $key['password']) {
              echo json_encode(true);
            }else{
              echo json_encode(false);
            }
          }
        }else{
          echo json_encode(false);
        }

      }else{
        echo json_encode(403);
      } // end validador key

    } catch (\Exception $e) {

      echo json_encode("500" . $e);

    }


  }

}
