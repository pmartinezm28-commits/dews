<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = $_POST["nombre"] ?? "";
        $correo = $_POST["correo"] ?? "";
        $conf = $_POST["conf"] ?? "";
        if(!isset($conf) || empty($conf)){
            echo "ERROR: La casilla no está marcada <br>";
        }
        else{
            $datos_validacion = true;
            if(!isset($nombre) || empty($nombre)){
                $datos_validacion = false;
            }
            if(!isset($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL) ){
                $datos_validacion = false;
            }
            if($datos_validacion){
                echo "Validación correcta <br>";
            }
        }
    }
include("formulario20.html");