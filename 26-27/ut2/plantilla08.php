<?php
/* Dado un número del 1 al 7 en una variable, muestra el nombre del día correspondiente. 
Si el número está fuera de rango, muestra un mensaje de error. Resuélvelo con switch.
 */
$dia = 1;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
    
</head>
<body>
    <h1>Ejercicio 08</h1>
    <?php
    $resultado = "";
    switch($dia){
        case 1:
            $resultado = "Lunes";
            break;
        case 2:
            $resultado = "Martes";
            break;
        case 3:
            $resultado = "Miércoles";
            break;
        case 4:
            $resultado = "Jueves";
            break;
        case 5:
            $resultado = "Viernes";
            break;
        case 6:
            $resultado = "Sábado";
            break;
        case 7:
            $resultado = "Domingo";
            break;
        default:
            $resultado = "El número introducida es incorrecto";
    }
    echo "El día de la semana es: " . $resultado;

    ?>



</body>
</html>	
	
	