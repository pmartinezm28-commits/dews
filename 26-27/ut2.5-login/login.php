<?php
session_start();

/* echo password_hash("ana123", PASSWORD_DEFAULT);
echo " - ";
echo password_hash("blas123", PASSWORD_DEFAULT); */


$error = "";
$csrf = "";
$usuarioRecordado = "";

// Protección del formulario, aleatorizamos y lo pasamos de binario a hexadecimal para poder leerlo
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Procesamos el formulario
    if(!isset($_POST['usuario'])){
        $error = "Debes indicar el usuario. ";
    }
    if(!isset($_POST['clave'])){
        $error .= "Debes indicar la clave. ";
    }
    // Si es correcto 
    if ($error === ""){
        // Comprobar CSRF
        
        if($_POST['csrf'] !== $_SESSION['csrf'] ){
            header("Location: login.php");
            die();
        }
        // Comprobar campos
        $usuarios_registrados = json_decode(file_get_contents('usuarios.json'), true); // json usuario
        $usuario = htmlspecialchars($_POST['usuario']); // formulario input
        $clave = htmlspecialchars($_POST['clave']); 
        
        // Recorremos el json usuarios.json que está en $usuarios_registrados
        foreach($usuarios_registrados['usuarios'] as $usuario_registrado){
            if($usuario_registrado['usuario'] === $usuario){
                if(password_verify($clave, $usuario_registrado['clave'])){   
                    // Login correcto 
                    $_SESSION['usuario'] = $usuario_registrado['usuario'];
                    header('Location: inicio.php');
                    die();
                }
                break;
            }
        } 

        $error = "Login incorrecto";
         
    }
}
else{
    $csrf = bin2hex(random_bytes(32));
    $_SESSION['csrf'] = $csrf; 
}

require('login.html');