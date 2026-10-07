
<!-- Dado un array de números enteros, calcula y muestra el máximo, el mínimo, la suma y la media. 
Puedes usar las funciones max(), min(), array_sum() y count(). 
-->

<?php
    $numeros = [2,5,10,80,17,55,34,26,100];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    
</head>
<body>
    <h1>Ejercicio 15</h1>
    <?php 
        $suma = array_sum($numeros);
        $media = $suma/count($numeros);
        echo "El mínimo es: " . min($numeros). "<br>";
        echo "El máximo es: " . max($numeros). "<br>";
        echo "La media es: " . $media . "<br>";
    ?>



</body>
</html>	
	
	