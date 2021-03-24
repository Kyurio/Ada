<?php
require_once("../../config/core/Autoload.php");



class Task extends Conexion{

  private $strKey;
  private $strTarea;
  private $strDescripcion;
  private $intUsuario;
  private $intEstado;

  function __construct(){

    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();

  }

  // insert
  public function insert_tarea(string $key, string $tarea, string $descripcion, int $usuario, int $estado){

    try {
      // validador key
      if(base64_decode($key) == 'elnene'){

        $this->intUsuario= $usuario;
        $this->strTarea = $tarea;
        $this->strDescripcion = $descripcion;
        $this->intEstado = $estado;
        // 1 activo - 0 inactivo;

        $sql = "INSERT INTO tarea(tarea, descripcion, usuario, estado) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->strTarea, $this->strDescripcion, $this->intUsuario, $this->intEstado);
        $resInsert = $insert->execute($arrData);

        if($resInsert){

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

  // select
  public function listar_tareas(){

    try {
      $sql  =  ("SELECT * FROM tarea");
      $stmt =  $this->conexion->query($sql);
      $row  =  $stmt->fetchAll();
      if ($row ) {
        return $row;
      }else {
        return "error";
      }
    }catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
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
