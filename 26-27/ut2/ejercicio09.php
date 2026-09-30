<?php
    /* Dado un número entero, muestra su tabla de multiplicar del 1 al 10 dentro de una tabla HTML. Usa un bucle for. */
    $numero = 10;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
    
</head>
<body>
    <h1>Ejercicio 09</h1>
    
        <table style="border: 1px solid black;">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Multiplicado</th>
                    <th>Multiplicación</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i <= 10; $i++): ?>
                    <tr>
                        <td><?= $numero ?></td>
                        <td><?= $i ?></td>
                        <td><?= $i * $numero ?></td>
                    </tr>    
                <?php endfor ?>    
            </tbody>
        </table>

</body>
</html>	
	
	