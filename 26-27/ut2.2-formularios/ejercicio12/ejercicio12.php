<?php  
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $turno = $_POST["turno"] ?? "";
        $nivel = $_POST["nivel"] ?? "";
        $mensaje_seleccion = "";
        if(!empty($turno)){
            $mensaje_seleccion = $turno;
        }
        if(!empty($nivel)){
            $mensaje_seleccion .= " y/e $nivel";
        }
        echo "La selección ha sido de: ". $mensaje_seleccion;
    }