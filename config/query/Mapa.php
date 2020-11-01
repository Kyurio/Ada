<?php
require_once("../../config/core/Autoload.php");


class Mapa extends Conexion{

  private $strMapa;

  function __construct(){
    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();
  }



  // insert
  public function insert_mapa(string $mapa){

    $this->strMapa = $mapa;

    $sql = "INSERT INTO mapa(url) VALUES (?)";
    $insert = $this->conexion->prepare($sql);
    $arrData = array($this->strMapa);
    $resInsert = $insert->execute($arrData);

    if($resInsert){

      return true;

    }else{

      return false;

    }


  }

  // select
  public function select_mapa(){}

  // update
  public function update_mapa(){}

  // delete
  public function delete_mapa(){}

}
