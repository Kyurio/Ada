 public function upload_files(){

    $carpeta_tributaria = $_FILES["carpeta_tributaria"];
    // Inicialización de la variable de mensaje
    
    $mensaje = '';
    // Tratamiento del formulario
    //if (isset($_POST['carpeta_tributaria'])) {

        // Recupera la información del archivo
        $informacion = $_FILES['carpeta_tributaria'];
        
        // Crea el nombre
        $nombreGenerado = date('YmdHis');

        // Extrae el archivo
        $nombre = $informacion['name'];

        // Extrae su tipo MIME
        $tipo_mime = $informacion['type'];
        
        // Extrae su tamaño
        $tamanio = $informacion['size'];
        
        // Extrae su ubicación del archivo temporal
        $archivo_temporal = $informacion['tmp_name'];
        
        // Extrae el codigo de error
        $codigo_error = $informacion['error'];

        // Controles y tratamiento
        switch ($codigo_error) {

          case UPLOAD_ERR_OK:

              // Determina su destino final
              chmod($destino = $_SERVER['DOCUMENT_ROOT']."/factorsystem/Simulador_Leasing/public/img/tributarios/".$nombreGenerado.$nombre, 777);
              // Copia el archivo temporal (probar el resultado)
              if (move_uploaded_file($archivo_temporal,$destino)) {
              // Copia OK => Mensaje de confirmación
                  $mensaje  = "Transferencia terminada - Archivo = $nombre - ";
                  $mensaje .= "Tamaño = $tamanio bytes - ";
                  $mensaje .= "Tipo MIME = $tipo_mime.";
              } else {
                  // Problema de copia => Mensaje de error
                  $mensaje = 'Problema al copiar en el servidor.';
              }

          break;
                
          case UPLOAD_ERR_NO_FILE:
            // Sin archivo
            $mensaje = 'Sin archivo.';
            break;
                
          case UPLOAD_ERR_INI_SIZE:
            // Tamaño archivo > UPLOAD_MAX_FILESIZE
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (tamaño > UPLOAD_MAX_FILESIZE).';
            break;
                
    
          case UPLOAD_ERR_FORM_SIZE:
            // Tamaño archivo > MAX_FILE_SIZE
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (tamaño > MAX_FILE_SIZE).';
            break;
                
          case UPLOAD_ERR_PARTIAL:
            // Archivo parcialmente transferido
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (problema durante la tranferencia).';
            break;
                
          case UPLOAD_ERR_NO_TMP_DIR:
            // Sin directorio temporal
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (sin directorio temporal).';
            break;
                
          case UPLOAD_ERR_CANT_WRITE:
            // Error durante de la escritura del archivo en disco
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (error durante la escritura del archivo en disco).';
            break;
                
          case UPLOAD_ERR_EXTENSION:
            // Transferencia detenida por la expresión
            $mensaje  = "Archivo '$nombre' no transferido ";
            $mensaje .= ' (transferencia detenida por la expresión).';
            break;
                
          default:
            // Error no previsto
            $mensaje  = "Archivo no transferido ";
            $mensaje .= " (error desconocido: $codigo_error ).";
        }
        echo $mensaje."<br>";
    //}

  }
