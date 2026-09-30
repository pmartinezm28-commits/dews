<?php
    /* Calcula la suma de todos los números enteros del 1 al 100 usando un bucle while. 
    Después, repite el cálculo con un bucle for y comprueba que el resultado coincide. */
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    
</head>
<body>
    <h1>Ejercicio 10</h1>
    <?php
        $contador = 1;
        $suma_while = 0;
        while($contador <= 100){
            $suma_while += $contador;
        
            $contador ++;
        }
        echo "La suma del while es: ". $suma_while . "<br>";

        $suma_for = 0;
        for($i = 1; $i <= 100; $i++){
            $suma_for += $i;
        }
    
        echo "La suma del for es: ". $suma_for . "<br>";
    ?>

</body>
</html>	
	
	