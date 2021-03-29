<?php
require_once("../../config/core/Autoload.php");


class Usuario extends Conexion{

  private $strKey;
  private $strNombre_Usuario;
  private $strPassword;
  private $intCorreo;
  private $intEstado;

  function __construct(){

    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();

  }

  // insert
  public function insert_usuario(string $key, string $nombre_usuario, string $password, string $correo){

    try {
      // validador key
      if(base64_decode($key) == 'elnene'){

        $this->strNombre_Usuario = $nombre_usuario;
        $this->strPassword = $password;
        $this->strCorreo = $correo;
        $this->intEstado = 1;

        // 1 activo - 0 inactivo;

        $sql = "INSERT INTO usuario(nombre_usuario, contraseña, correo, estado) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strNombre_Usuario, $this->strPassword, $this->strCorreo, $this->intEstado);
        $resInsert = $insert->execute($arrData);

        if($resInsert){

          return true;

        }else{

          return false;

        }

      }else{

        return 500;

      }

    } catch (\Exception $e) {
      echo "errro";
    }
  }

  // select
  public function listar_usuario(){

    try {

      $sql  =  ("SELECT * FROM usuario WHERE estado = 1");
      $stmt =  $this->conexion->query($sql);
      $row  =  $stmt->fetchAll();
      if ($row ) {
        return $row;
      }

    }catch(PDOException $e) {
      echo "Error: " . $e;
    }

  }

  // update
  public function update_tarea(int $id){

    try{

      $this->intEstado = 0;
      $this->id = $id;
      // 1 activo - 0 inactivo;

      $sql = "UPDATE task SET estado = ? WHERE id = ?";
      $update = $this->conexion->prepare($sql);
      $arrData = array($this->intEstado, $this->id);
      $resInsert = $update->execute($arrData);

      if($resInsert){

        return true;

      }else{

        return false;

      }

    } catch (\Exception $e) {
      echo "errro 500";
    }

  }

  // delete
  public function delete_mapa(){}


}
