<?php
    $num1 = $_POST["num1"] ?? "";   
    $num2 = $_POST["num2"] ?? "";  
    $operador = $_POST["operador"] ?? "";  
    
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $datos_validos = true; // Verdadero si son correctos los datos, Falso en caso contrario
        if (!isset($_POST["num1"]) && !is_numeric($_POST["num1"])){
            $datos_validos = false;
        }
        if (!isset($_POST["num2"]) && !is_numeric($_POST["num2"])){    
            $datos_validos = false;
        }
        if (!isset($_POST["operador"]) && !is_string($_POST["operador"]) ){    
            $datos_validos = false;
        }
        if($datos_validos){
            $resultado = 0;
            switch($operador){
                case "+":
                    $resultado = $num1 + $num2;    
                    break;
                case "-":
                    $resultado = $num1 - $num2;    
                    break;
                case "*":
                    $resultado = $num1 * $num2;    
                    break;
                case "/":
                    if ($num2 == 0){
                        $resultado = 0;
                    }
                    else{
                        $resultado = $num1 / $num2;    
                    }
                    break;
            }
        }
        echo "El resultado de la operación es: $resultado";
    }

include("formulario4.html");    