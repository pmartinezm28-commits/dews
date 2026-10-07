<?php
    $producto1 = 150;
    $iva = 21;

    $producto_iva = 150 * 21 / 100;
    $producto1 += $producto_iva; 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
    
</head>
<body>
    <h1>Ejercicio 05</h1>
    <?= "El precio final es: " .$producto1 . " y el importe con iva es: " . $producto_iva?>

</body>
</html>	
	
	