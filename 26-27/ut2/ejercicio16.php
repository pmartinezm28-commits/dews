<!--
Crea un array multidimensional con al menos tres alumnos, cada uno con nombre, edad y nota. 
Recórrelo con foreach anidados y muestra los datos en una tabla HTML con una fila por alumno.
-->
<?php
    $alumnos = [
        [ "nombre"=> "Raúl",
          "edad" => 18,
          "nota" => 6 ],
        [ "nombre"=> "Juan",
          "edad" => 28,
          "nota" => 8 ],
        [ "nombre"=> "Irene",
          "edad" => 20,
          "nota" => 9 ]    
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
    
</head>
<body>
    <h1>Ejercicio 16</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Nota</th>
        </tr>
        <?php foreach($alumnos as $alumno): ?>
            <tr>
                <td><?= $alumno["nombre"] ?></td>
                <td><?= $alumno["edad"] ?></td>
                <td><?= $alumno["nota"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>	
	
	