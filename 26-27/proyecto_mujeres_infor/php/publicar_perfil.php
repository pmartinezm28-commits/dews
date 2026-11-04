<?php
    /* Publicar perfil
        Autor: Pablo Martínez Masero    
        Licencia: GLp
        Fecha: 04/11/2026
    */
    session_start();
    require('configuracion.php');
    $error = "";
    $csrf = "";
    var_dump($_POST);
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // crear la session y el csrf
        if (!isset($_POST['foto'])){
            $error = ' Falta la foto';
        }

        if (!isset($_POST['nombre']) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $_POST['nombre'])){
            $error .= 'El nombre es incorrecto';
        }

        if (!isset($_POST['descripcion']) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $_POST['descripcion'])){
            $error .= ' La descripcion es incorrecta';
        }

        if ($error === ""){
            // Verificacion de la foto
            header( 'Location: ../html/inicio.html');
        }
        /* if (isset($_POST['publicar'])){
        } */
    }

    else{
        $csrf = bin2hex(random_bytes(32));
        $_SESSION['csrf'] = $csrf; 
    }
    require('../html/publicar_perfil.html');        
    