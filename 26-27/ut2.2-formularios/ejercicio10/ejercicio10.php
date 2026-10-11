<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"] ?? "";
        $contra1 = $_POST["contra1"] ?? "";
        $contra2 = $_POST["contra2"] ?? "";
        $datos_validos = true;
        if(!isset($usuario) || empty($usuario)){
            $datos_validos = false;
        }
        if(!isset($contra1) || empty($contra1) || $contra1 < 8){
            $datos_validos = false;
        }
        if(!isset($contra2) || empty($contra2) || $contra2 === $contra1){
            $datos_validos = false;
        }
        if($datos_validos){
            $contra = password_hash($contra1, PASSWORD_DEFAULT);
            echo "Datos validos y el hash es: ".$contra;
        }
        else{
            echo "Error al introducir datos";
        }
    }

    include("formulario10.html");