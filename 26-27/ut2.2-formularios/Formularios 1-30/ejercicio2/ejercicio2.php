<?php
    
    //var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        if (isset($_POST["nombre"])){
            echo "Hola ". htmlspecialchars($_POST["nombre"]). "<br>";
            die();
        }
    }

include("formulario2.html");