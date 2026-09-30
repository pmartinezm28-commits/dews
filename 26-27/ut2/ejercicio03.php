<?php
    $numero_a = 14;
    $numero_b = 2;

    $suma = $numero_a + $numero_b;
    $resta = $numero_a - $numero_b;
    $mult = $numero_a * $numero_b;
    $div = $numero_a / $numero_b;
    $resto = $numero_a % $numero_b;
    $potencia = $numero_a ** $numero_b;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
    
</head>
<body>
    <h1>Ejercicio 03</h1>
    <?= "Suma: " .$suma; ?> <br> 
    <?= "Resta: " . $resta; ?> <br>
    <?= "Multiplicacion: " . $mult; ?><br>
    <?= "Div: " . $div; ?> <br>
    <?= "Resto: " . $resto; ?> <br>
    <?= "Potencia: " . $potencia; ?> <br> <br>
    <?php if($numero_a > $numero_b)echo "Comparación: el primer número es mayor";  ?>


</body>
</html>	
	
	