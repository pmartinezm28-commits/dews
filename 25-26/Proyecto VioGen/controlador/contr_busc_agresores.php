<?php
    require("../modelos/agresores.php");   
    if(!empty($_POST)){
        // Traemos el dato a buscar
        $buscador = $_POST["buscador"];

        // Guardamos la victima para no perderla
        $victima = $_POST["victima"];

        $mensaje = "";
        $coincidencias = array();

        // Buscamos si hay coincidencias de agresores    
        for($i = 0; $i < count($agresores); $i++){
            for($j = 0; $j < count($agresores[$i]); $j++){
                if($agresores[$i][$j] == $buscador){
                   $mensaje = "Encuentra coincidencia/s";   
                   array_push($coincidencias, ($agresores[$i]));
                }            
            }       
        }
        if(count($coincidencias) == 0){
            $mensaje = "No hay coincidencias";
        }


        include("../vista/form_incidente.php");
    }