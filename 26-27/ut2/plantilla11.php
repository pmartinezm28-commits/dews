<?php
/* Dado un número entero N, muestra todos los números pares desde 0 hasta N separados por comas.
   Usa un bucle y la estructura de control continue para saltar los impares. */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    
</head>
<body>
    <h1>Ejercicio 11</h1>
    <?php
        $N = 11;

        for($i = 0; $i < $N; $i++){
            if($i % 2 == 0){
                echo $i . "<br>";
            }
        }
    ?>



</body>
</html>	
	
	