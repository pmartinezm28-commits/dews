<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if(empty($_FILES) ){
        include("login.html");
        echo("Array: ");
        print_r( $_POST);
        echo 'Entra en if';
        die();
    }
    /* print_r("Post:". $_POST);
    $nombre =  $_POST["nombre"];
    $fecha = $_POST["fecha"];
    $nombreFichero = "fichero".DIRECTORY_SEPARATOR.$_FILES["fichero1"]["name"];
    if(!move_uploaded_file($_FILES["fichero1"]["tmp_name"],$nombreFichero)){
        
        $archivo1 = $_POST["archivo1"];
        $archivo2 = $_POST["archivo2"]; 
        echo "MAL";
    }
    else{
        echo "OK";
        echo "<br/> <a href = 'ficheros1/mi_fichero'>Descargar< /a>";
    }
    echo "Nombre: ". $nombre;
    echo "Fecha: ". $fecha;
     */
    