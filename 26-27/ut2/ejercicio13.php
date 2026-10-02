<?php
/* Crea un array con al menos cinco nombres de frutas.
 Recórrelo con foreach y muestra cada fruta en un elemento de una lista HTML. 
 Indica también el número total de frutas con count(). */
    $frutas = ["fresas", "manzana", "manzana", "naranjas", "naranjas", "peras", "platanos", "naranjas"];
    // Hacer 
    function  contar_frutas(){

    }

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
        $contador = 0;
        foreach($frutas as $indice => $fr):
            echo $indice . ": " . $fr . "<br>";
    ?>
    <!-- <ul>
        <li>
            <?php 
            ?>
        </li>
    </ul> -->
    <?php endforeach; ?>

    <?php echo "Total de frutas: " . count($frutas) ?>

</body>
</html>	
	
	