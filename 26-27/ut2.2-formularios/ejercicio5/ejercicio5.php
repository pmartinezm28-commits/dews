<?php
    $cantidad = $_POST["cantidad"] ?? "";     
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $datos_validos = true; // Verdadero si son correctos los datos, Falso en caso contrario
        if (!isset($_POST["cantidad"]) && !is_numeric($_POST["cantidad"])){
            $datos_validos = false;
        }
        if($datos_validos){

        }
    }