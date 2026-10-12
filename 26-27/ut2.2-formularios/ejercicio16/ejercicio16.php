<?php   
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $pre1 = $_POST["pre1"] ?? "";
        $pre2 = $_POST["pre2"] ?? "";
        $pre3 = $_POST["pre3"] ?? "";
        $respuestas = ["pre1" => "dolar", "pre2" => "atributos", "pre3" => "metodos"];

        $datos_validos = true;

        if (!isset($pre1) || empty($pre1)){
            $datos_validos = false;
        }

        if (!isset($pre2) || empty($pre2)){
            $datos_validos = false;
        }

        if (!isset($pre3) || empty($pre3)){
            $datos_validos = false;
        }

        if($datos_validos){
            $nota = 0;
            if($pre1 === $respuestas["pre1"]){
                $nota++;
            }   

            if($pre2 === $respuestas["pre2"]){
                $nota++;
            }   

            if($pre3 === $respuestas["pre3"]){
                $nota++;
            }   
            echo "La puntuación es: $nota";
        }
    }

    include("formulario16.html");