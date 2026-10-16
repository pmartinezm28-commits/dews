<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
            $ruta = $_FILES["archivo"]["tmp_name"];
            $archivo = $_FILES["archivo"]["name"];
            $size = $_FILES["archivo"]["size"];
            
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            if($extension === "txt" || $extension === "pdf" ){
                if($size < 1024){
                    $id = uniqid() .".txt";
                    $destino = __DIR__ . '/subidas/' . $archivo;

                    if(!is_dir(__DIR__ . '/subidas')){
                        mkdir(__DIR__. '/subidas');
                    }

                    if (move_uploaded_file($ruta, $destino)){
                            rename($destino, __DIR__ . '/subidas/' .$id);
                            echo "Archivo movido correctamente " . $id;
                    }
                    else{
                        echo "Error al mover el archivo";
                    }
                }
                else{
                    echo "Error: Tamaño del archivo mayor de 1024 bytes";
                }
            }
            else{
                echo "Extensión de archivo incorrecta, solo se acepta pdf y txt";
            }
        }
    }
    include("formulario22.html");

