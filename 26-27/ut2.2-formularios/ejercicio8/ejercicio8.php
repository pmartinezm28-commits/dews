<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $edad = $_POST['edad'] ?? "";
        $nombre = trim($_POST['nombre']) ?? "";
        $email = trim($_POST['email']) ?? "";
        
        $mensaje_errores = "";
        $datos_validos = true;
        
        if(!isset($nombre) || empty($nombre)){
            $mensaje_errores .=" Nombre incorrecto. ";
            $datos_validos = false;
        }
        if(!isset($edad) || !is_numeric($edad) || 0 > $edad || $edad > 120){
            $mensaje_errores .=" Edad incorrecta. ";
            $datos_validos = false;
        }
        if(!isset($email) || empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $mensaje_errores .=" Email incorrecto. ";
            $datos_validos = false;
        }
        if($datos_validos){
            echo "Datos validos";
        }
        else{
            echo $mensaje_errores;
        }
        
    }

    include("formulario8.html");
