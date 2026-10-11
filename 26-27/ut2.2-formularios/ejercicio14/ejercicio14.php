<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $lenguajes = $_POST["lenguajes"] ?? [];
        echo "Lenguajes:" . implode(", ", $lenguajes);
    }