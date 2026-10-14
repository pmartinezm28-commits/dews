<?php
    $descripciones = [
        "Madrid" => "Capital de España",
        "Paris" => "Capital de Francia",
        "Londres" => "Capital de Inglaterra"
    ];

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $ciudad = $_POST["ciudad"] ?? "";
        if (!empty($ciudad)){
            echo "Seleccionada: $ciudad. " . $descripciones[$ciudad];
        }
    }

    include("formulario13.html");