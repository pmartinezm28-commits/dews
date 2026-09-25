<?php 
    if(empty($_GET)){
        include('login.html');
    }
    else{
        echo 'Entra';
        $nombre = $_GET['nombre'];
        $ciudad = $_GET['ciudad'];
        $mascota = $_GET['mascota'];
        include('chiste_text.php');
    }