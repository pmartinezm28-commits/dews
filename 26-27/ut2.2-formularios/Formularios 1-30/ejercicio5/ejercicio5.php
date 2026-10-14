<?php
    $cantidad = $_POST["cantidad"] ?? "";     
    $tasa_cambio = $_POST["tasa_cambio"] ;
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $datos_validos = true; // Verdadero si son correctos los datos, Falso en caso contrario
        if (!isset($_POST["cantidad"]) && !is_numeric($_POST["cantidad"])){
            $datos_validos = false;
        }
        if($datos_validos){
            $res = $cantidad * $tasa_cambio;
            echo "El resultado es: ". number_format($res, 2, ",", "") . "$";
        }
    }

include("formulario5.html");