<?php
    /* Publicar perfil
        Autor: Pablo Martínez Masero    
        Licencia: GLp
        Fecha: 04/11/2026
    */

    require('configuracion.php');
    $error = "";
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $validaciones_correctas = true;
        if (!isset($_POST['nombre'])){
            $error = 'Falta el nombre';
            $validaciones_correctas = false;
        }
        if (!isset($_FILES['archivo'])){
            $error .= ' Falta la foto';
            $validaciones_correctas = false;
        }
        if (!isset($_POST['descripcion'])){
            $error .= ' Falta la descripcion';
            $validaciones_correctas = false;
        }

        echo "error: ". $error;

        if (isset($_POST['publicar']) && $validaciones_correctas){
            header( 'Location: ../html/inicio.html');
        }
    }
require('../html/publicar_perfil.html');        
    