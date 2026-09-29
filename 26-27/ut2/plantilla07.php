<?php
    /* Dada una nota numérica entre 0 y 10,
    muestra la calificación correspondiente: insuficiente, suficiente, bien, notable o sobresaliente.
    Resuélvelo primero con if...elseif...else y después con switch o match. */
    $nota = 6; 

    $nota2 = 9;

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
    echo "Mediante if: " . "<br>" ;
    if ($nota < 5){
        echo "Insuficiente";
    }
    else if ($nota >= 5 && $nota < 7){
        echo "Suficiente";
    }
    
    else if ($nota >= 7 && $nota < 9){
        echo "Notable";
    }
    else if ($nota >= 9 && $nota < 10){
        echo "Notable";
    }

    echo "Mediante if: " . "<br>" ;
    switch($nota2){
        case $nota2 < 5:
            break;

    }

    ?>
</body>
</html>	
	
	