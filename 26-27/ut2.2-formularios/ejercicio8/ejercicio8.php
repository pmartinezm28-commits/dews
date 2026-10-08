<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $edad = $_POST['edad'] ?? "";
        $nombre = trim($_POST['nombre']) ?? "";
        $email = trim($_POST['email']) ?? "";
        $datos_validos = true;
        if(!isset($edad) || !is_numeric($edad) || 0 < $edad || $edad > 120){
            $datos_validos = false;
        }
        if(!isset($nombre) || empty($nombre)){
            $datos_validos = false;
        }
        if(!isset($email) || empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email incorrecto";
            $datos_validos = false;
        }
        if($datos_validos){
            echo "datos validos";
        }
        
    }
