<?php
/* Crea un array con al menos cinco nombres de frutas.
 Recórrelo con foreach y muestra cada fruta en un elemento de una lista HTML. 
 Indica también el número total de frutas con count(). */
    $frutas = ["fresas", "manzana", "manzana", "naranjas", "naranjas", "peras", "platanos", "naranjas"];
    // Hacer 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    
</head>
<body>
    <h1>Ejercicio 13</h1>
    <?php 
        foreach($frutas as $fruta):
            
    ?>
    <ul>
        <li>
            <?= $fruta; ?>
        </li>
    </ul>
     

    <?php
    endforeach;
    echo "Total de frutas: " . count($frutas) ?>

</body>
</html>	
	
	