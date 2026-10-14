<?php   
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
            $ruta = $_FILES["archivo"]["tmp_name"];
            $archivo = file_get_contents($ruta);
            echo "El archivo contiene: <br>" .  htmlspecialchars($archivo) . "<br>";
            echo "El tamaño del archivo es: " . filesize($ruta);
        }
    }