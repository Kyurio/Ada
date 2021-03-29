<?php
require_once("../../config/core/Autoload.php");



class Task extends Conexion{

  private $strKey;
  private $strTarea;
  private $strDescripcion;
  private $intUsuario;
  private $intEstado;
  private $idTarea;

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
      }
    }catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

  }

  // update
  public function update_tarea(string $key, string $tarea, string $descripcion, int $usuario, int $estado, int $id){

    try{

      $this->intUsuario= $usuario;
      $this->strTarea = $tarea;
      $this->strDescripcion = $descripcion;
      $this->intEstado = $estado;
      $this->idTarea = $id;
      // 1 activo - 0 inactivo;

      $sql = "UPDATE tarea SET tarea = ?, descripcion = ?, usuario = ?, estado = ? WHERE id_tarea = ?";
      $update = $this->conexion->prepare($sql);
      $arrData = array($this->strTarea, $this->strDescripcion, $this->intUsuario, $this->intEstado, $this->idTarea);
      $resInsert = $update->execute($arrData);

      if($resInsert){

        return json_encode(true);

      }else{

        return json_encode(false);

      }

    } catch (\Exception $e) {
      echo "error 500 " . $e;
    }

  }

  // acutaliza estado tarea

  // delete
  public function delete_tarea(string $key, int $id){

    try {
      // validador key
      if(base64_decode($key) == 'elnene'){

        $this->idTarea = $id;


        $sql = "DELETE FROM tarea WHERE id_tarea = ?";
        $insert = $this->conexion->prepare($sql);
        $arrData = array($this->idTarea);
        $resDeslete = $insert->execute($arrData);

        if($resDeslete){

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
