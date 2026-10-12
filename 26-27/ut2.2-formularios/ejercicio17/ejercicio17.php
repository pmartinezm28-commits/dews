<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $cantidad = $_POST["cantidad"] ?? 0;
        $id_producto = $_POST["id_producto"] ?? "";
        $precio = 7;
        if (isset($cantidad) || !empty($cantidad) || is_numeric($cantidad)){
            echo "La cantidad es $cantidad y el id del producto es $id_producto <br>";
            echo "El precio total es: ". $cantidad * $precio; 
        }

    }