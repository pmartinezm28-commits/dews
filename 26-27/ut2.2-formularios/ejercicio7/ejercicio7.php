<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $edad = $_POST["edad"] ?? "";
        $nombre = trim($_POST["nombre"]) ?? "";
        $datos_validos = true;    
        if (!isset($_POST["edad"]) || !is_numeric($_POST["edad"])){
            $datos_validos = false;
        }
        if (!isset($_POST["edad"]) || empty($_POST["nombre"])){
            $datos_validos = false;
        }
        if($datos_validos){
            if ($edad < 18){
                echo "No puedes acceder";
            }
            else{
                echo "Bienvenido/a $nombre" ;
            }
        }
    }