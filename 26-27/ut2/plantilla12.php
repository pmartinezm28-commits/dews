<?php
/* Muestra una cuenta atrás desde 10 hasta 1 usando un bucle do...while. Al finalizar, muestra el mensaje «¡Despegue!». */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    
</head>
<body>
    <h1>Ejercicio 12</h1>
    <?php
        $cuenta = 10;
        do{
            echo $cuenta . "<br>";
            $cuenta --;
        }while($cuenta >= 1);
        echo "¡Despegue!";
    ?>



</body>
</html>	
	
	