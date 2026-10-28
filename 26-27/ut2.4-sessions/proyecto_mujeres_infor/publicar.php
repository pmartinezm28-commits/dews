<?php
    require('configuracion.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (!isset($_POST['nombre'])){
            $error = 'Falta el nombre';
        }
    }
require('publicar.html');