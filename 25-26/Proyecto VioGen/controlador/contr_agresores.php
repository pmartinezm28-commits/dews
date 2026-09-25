<?php

    if(!empty($_POST)){
        $victima = $_POST["victima"];

        $nombre_agresor = trim($_POST["nombre_agresor"]);
        $apellido1_agresor = trim($_POST["apellido1_agresor"]);
        $apellido2_agresor = trim($_POST["apellido2_agresor"]);
        $edad_agresor = trim($_POST["edad_agresor"]);
        $telefono_agresor = trim($_POST["telefono_agresor"]);
        $calle_agresor = trim($_POST["calle_agresor"]);
        $numero_agresor = trim($_POST["numero_agresor"]);
        $documento_agresor = trim($_POST["documento_agresor"]);

        $agresor = $nombre_agresor . " " . $apellido1_agresor . " " . $apellido2_agresor . " " . $edad_agresor . " " . $telefono_agresor . " " . $calle_agresor . " " . $numero_agresor . " " . $documento_agresor;
        include("../vista/form_incidente.php");
    }
