<?php
    /* Dada una nota numérica entre 0 y 10,
    muestra la calificación correspondiente: insuficiente, suficiente, bien, notable o sobresaliente.
    Resuélvelo primero con if...elseif...else y después con switch o match. */
    $nota = 7.7; 

    $nota2 = 6.1;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07</title>
    
</head>
<body>
    <h1>Ejercicio 07</h1>
    <?php 
    echo "Mediante if: " ;
    if ($nota < 5){
        echo "Insuficiente" . "<br>";
    }
    else if ($nota >= 5 && $nota < 7){
        echo "Suficiente" . "<br>";
    }
    
    else if ($nota >= 7 && $nota < 9){
        echo "Notable" . "<br>";
    }
    else if ($nota >= 9 && $nota < 10){
        echo "Notable" . "<br>";
    }

    $resultado = "";
    switch($nota2){
        case $nota2 < 5:
            $resultado = "Insuficiente";
            break;
        case $nota2 >= 5 && $nota2 < 7:
            $resultado = "Suficiente";
            break;
        case $nota2 >= 7 && $nota2 < 9:
            $resultado = "Notable";
            break;
        case $nota2 >= 9 && $nota2 < 10:
            $resultado = "Sobresaliente";
            break;
        default:
            $resultado = "La nota introducida es incorrecta";
    }
    echo "Mediante switch: " . $resultado;

    ?>
</body>
</html>	
	
	