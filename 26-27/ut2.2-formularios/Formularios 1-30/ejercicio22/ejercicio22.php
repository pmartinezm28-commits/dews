<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
            $ruta = $_FILES["archivo"]["tmp_name"];
            
            $archivo = $_FILES["archivo"]["name"];

            $size = $_FILES["archivo"]["size"];
            
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            if($extension === "txt" || $extension === "pdf" ){
                if($size < 1024){
                    $id = uniqid();
                    // Comprobar si la carpeta subidas existe
                    if (is_dir("/subidas")){
                        echo "existe directorio";
                    }
                    else{
                        echo "No existe directorio";
                    }

                    // Existe
                    //  
                    // No existe
                    //
                }
                else{
                    echo "Error: Tamaño del archivo mayor de 1024 bytes";
                }
            }
            /* echo "La extension es: " . $extension . "<br>";
            echo "Size $size <br>";
            echo "Contenido: ". $archivo = file_get_contents($ruta) . "<br>"; 
            */
        }
    }
    include("formulario22.html");

