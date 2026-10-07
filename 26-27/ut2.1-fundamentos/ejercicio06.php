<?php
    $num = 3;
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
    
</head>
<body>
    <h1>Ejercicio 06</h1>
    <?php
        echo "Valor de la variable: ". $num. " <br>";
        if ($num % 2 == 0){
            echo "Es par" . "<br>";
        }
        else{
            echo "Es impar". "<br>";
        }

        echo "Cambiamos el valor de la variable";
        $num = 10;

        echo "Valor de la variable cambiado: ". $num;

    ?>


</body>
</html>	
	
	