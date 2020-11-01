<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $carpeta_tributaria = $_FILES["archivo"];

  print_r($_FILES["archivo"]);

  $mensaje = '';
  $informacion = $_FILES['archivo'];
  $nombreGenerado = date('YmdHis');
  $nombre = $informacion['name'];
  $tipo_mime = $informacion['type'];
  $tamanio = $informacion['size'];
  $archivo_temporal = $informacion['tmp_name'];
  $codigo_error = $informacion['error'];

  switch ($codigo_error) {

    case UPLOAD_ERR_OK:

    $destino = $_SERVER['DOCUMENT_ROOT']."/kyaria/assets/files/".$nombreGenerado.$nombre;
    if (move_uploaded_file($archivo_temporal, $destino)) {

      $mensaje  = true;

    } else {

      $mensaje = false;
    }

    break;
    case UPLOAD_ERR_NO_FILE:
    $mensaje = 'Sin archivo.';
    break;

    case UPLOAD_ERR_INI_SIZE:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (tamaño > UPLOAD_MAX_FILESIZE).';
    break;

    case UPLOAD_ERR_FORM_SIZE:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (tamaño > MAX_FILE_SIZE).';
    break;

    case UPLOAD_ERR_PARTIAL:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (problema durante la tranferencia).';
    break;

    case UPLOAD_ERR_NO_TMP_DIR:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (sin directorio temporal).';
    break;

    case UPLOAD_ERR_CANT_WRITE:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (error durante la escritura del archivo en disco).';
    break;

    case UPLOAD_ERR_EXTENSION:
    $mensaje  = "Archivo '$nombre' no transferido ";
    $mensaje .= ' (transferencia detenida por la expresión).';
    break;

    default:
    $mensaje  = "Archivo no transferido ";
    $mensaje .= " (error desconocido: $codigo_error ).";
  }

  return $mensaje;

}
