<?php
    $cad1 = "123";
    $cad2 =  "3.14" ;
    $cad3 =  "abc";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
    
</head>
<body>
    <h1>Ejercicio 04</h1>
    <?php echo "Cadena a entero: " . (int)$cad1 . " ". gettype($cad1); ?> <br>
    <?php echo "Cadena a float: " . (float)$cad2 . " ". gettype($cad2); ?> <br>
    <?php echo "Cadena a entero: " . (int)$cad3 . " ". gettype($cad3); ?> <br> <br>
    <?php echo "La cadena de texto 'abc' no se puede convertir a entero, su resultado es 0" ?> <br>

</body>
</html>	
	
	