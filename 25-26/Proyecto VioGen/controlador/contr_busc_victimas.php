<?php

   /*  require("../modelos/victimas_old.php");   
   
    if(!empty($_POST)){
        
        // Traemos el dato a buscar
        $buscador = $_POST["buscador"];

        $jensaje = "";
        $coincidencias = array();
         
        // Buscamos si hay coincidencias de víctimas    
        for($i = 0; $i < count($victimas); $i++){
            for($j = 0; $j < count($victimas[$i]); $j++){
                if($victimas[$i][$j] == $buscador){
                   $jensaje = "Encuentra coincidencia/s";   
                   array_push($coincidencias, ($victimas[$i]));
                }            
            }       
        }
        if(count($coincidencias) == 0){
            $jensaje = "No hay coincidencias";
        }

        include("../vista/buscador_victimas.php");

    } */

    
    require("../modelos/victimas.php");   
    if(!empty($_POST)){
        
        $buscador = $_POST["buscador"];

        $mensaje = "";
        $coincidencias = array();


        // Buscamos si hay coincidencias de víctimas    
        for($i = 0; $i < count($victimas); $i++){
            for($j = 0; $j < count($victimas['A']); $j++){
                if($buscador == ($victimas['A'][$j])){ 
                    $mensaje = "Encuentra coincidencia/s";  
                    $nombre =  $victimas['A'][$j]; 
                    $apellidos = $victimas['B'][$j];
                    $dni = $victimas['C'][$j] ;
                    $telefono = $victimas['D'][$j];
                    $victima = $nombre . " " .  $apellidos . " " . $dni . " " . $telefono;
                    array_push($coincidencias, ($victima));
                    break;
                }
            }
            for($k = 0; $k <count($victimas['B']); $k++){
                if($buscador == ($victimas['B'][$k])){ 
                    $mensaje = "Encuentra coincidencia/s";  
                    $nombre =  $victimas['A'][$k]; 
                    $apellidos = $victimas['B'][$k];
                    $dni = $victimas['C'][$k] ;
                    $telefono = $victimas['D'][$k];
                    $victima = $nombre . " " .  $apellidos . " " . $dni . " " . $telefono;
                    array_push($coincidencias, ($victima));
                    break;
                }
            }
            for($j = 0; $j < count($victimas['C']); $j++){
                if($buscador == ($victimas['C'][$j])){ 
                    $mensaje = "Encuentra coincidencia/s";  
                    $nombre =  $victimas['A'][$j]; 
                    $apellidos = $victimas['B'][$j];
                    $dni = $victimas['C'][$j] ;
                    $telefono = $victimas['D'][$j];
                    $victima = $nombre . " " .  $apellidos . " " . $dni . " " . $telefono;
                    array_push($coincidencias, ($victima));
                    break;
                }
            }
            for($j = 0; $j <count($victimas['D']); $j++){
                if($buscador == ($victimas['D'][$j])){ 
                    $mensaje = "Encuentra coincidencia/s";  
                    $nombre =  $victimas['A'][$j]; 
                    $apellidos = $victimas['B'][$j];
                    $dni = $victimas['C'][$j] ;
                    $telefono = $victimas['D'][$j];
                    $victima = $nombre . " " .  $apellidos . " " . $dni . " " . $telefono;
                    array_push($coincidencias, ($victima));
                    break;
                }
            }
        } 
        if(count($coincidencias) == 0){
            $mensaje = "No hay coincidencias";
        }
        
        include("../vista/buscador_victimas.php");
        
    }
    







     