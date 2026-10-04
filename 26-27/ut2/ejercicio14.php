
<!-- 
Crea un array asociativo con los datos de un alumno: nombre, edad, ciclo y nota media.
Recórrelo con foreach mostrando cada clave y su valor en una tabla HTML de dos columnas.
-->
<?php
    $alumno = [
        "nombre"=> "Raúl",
        "edad" => 18,
        "ciclo" => "DAW",
        "media" => "6"
    ];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    
</head>
<body>
    <h1>Ejercicio 14</h1>
    <table>
            <tr>
                <th>
                    Datos
                </th>
                <th>
                    Alumno
                </th>
            </tr>
            // Recorremos el array y creamos una fila con dos columnas de clave=>valor
            <?php foreach($alumno as $clave => $valor ): ?>
                <tr>
                    <td><?= $clave ;?> </td>
                    <td><?= $valor ;?> </td>
                </tr>
            <?php endforeach; ?>    
    </table> 

</body>
</html>	
	
	