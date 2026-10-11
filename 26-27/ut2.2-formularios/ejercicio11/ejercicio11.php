<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $aficiones = $_POST["aficiones"] ?? [];
        if(!empty($aficiones) ){
            echo "Aficiones seleccionadas: <br>";
            foreach($aficiones as $aficion){
                echo $aficion . "<br>";
            }
        }
        else{
            echo "No se ha seleccionado ninguna afición";
        }
    }