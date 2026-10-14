<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $titulo = htmlspecialchars($_POST["titulo"]) ?? "";
        $texto = htmlspecialchars($_POST["texto"]) ?? "";
        $datos_validos = true;
        if(!isset($titulo) || empty($titulo)){
            $datos_validos = false;
        }
        if(!isset($texto) || empty($texto)){
            $datos_validos = false;
        }

        if ($datos_validos){
            echo $titulo . "<br>";
            echo $texto . "<br>";
            echo "Tamaño del texto: " .strlen($texto);
        }
        else{
            echo "Datos inválidos.";
        }
    }