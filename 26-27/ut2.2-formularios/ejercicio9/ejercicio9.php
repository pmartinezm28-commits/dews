<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST["usuario"] ?? "";
        $contra = $_POST["contra"] ?? "";
        $datos_validos = true;
        if(!isset($usuario) || empty($usuario)){
            $datos_validos = false;
        }
        if(!isset($contra) || empty($contra) || $contra < 8){
            $datos_validos = false;
        }
        if($datos_validos){
            $contra = password_hash($contra, PASSWORD_DEFAULT);
            echo "Datos validos y el hash es: ".$contra;
        }
    }