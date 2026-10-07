<?php
    
    //var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] === "GET"){
        if (isset($_GET["nombre"])){
            echo "Hola ". htmlspecialchars($_GET["nombre"]). "<br>";
            die();
        }
    }

include("formulario1.html");