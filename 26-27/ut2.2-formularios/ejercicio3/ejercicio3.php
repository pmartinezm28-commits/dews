<?php
    
    $num1 = $_POST["num1"] ?? '';   
    $num2 = $_POST["num2"] ?? "";    

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $datos_validos = true;
        if (!isset($_POST["num1"]) && !is_numeric($_POST["num1"])){
           $datos_validos = false;
        }
        if (!isset($_POST["num2"]) && !is_numeric($_POST["num2"])){    
            $num2_correctos = false;
        }
        if($datos_validos){
            $suma = $num1 + $num2;
            echo  "La suma es: $suma". "<br>";
        }
    }

include("formulario3.html");