<?php
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        $productos = ["mesas", "platos", "vasos", "latas"];
        $termino = $_GET["termino"] ?? "";
        if(isset($termino) || !empty($termino)){
            $termino = htmlspecialchars($termino);
            foreach ($productos as $producto) {
                $flag = stripos($producto, $termino) != "" ? true : false;
                /* echo "Stripos: " . stripos($producto, $termino). " ";
                echo "Flag: " . $flag. " "; */
                if($flag){
                    echo "Coincide $producto". "<br>";
                }
            }
        }
    }