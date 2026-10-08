<?php
    $array_errores = [];
    $numero = "";
    $texto = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero = $_POST['numero'] ?? "";
        $texto = trim($_POST['texto']) ?? "";
        if(!isset($_POST["numero"]) || !is_numeric($_POST["numero"])){
            $array_errores[0] = "Valor numérico incorrecto";
        }
        if(!isset($_POST["texto"]) || empty($_POST["texto"])){
            $array_errores[1] = "Valor de texto incorrecto";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php 
        if (!empty($array_errores)):?>
            <?php foreach ($array_errores as $error): ?>
                <p><?= htmlspecialchars($error) ?></p>
            <?php endforeach; ?>
            
    <?php endif; ?>
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && empty($array_errores)): ?>
        <p>El formulario se ha procesado correctamente</p>
    <?php else:  ?>         
    <form action="" method="post">
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" value="<?= ($numero) ?>"><br>
        <label for="texto">Texto</label>
        <input type="text" name="texto" id="texto" value="<?= htmlspecialchars($texto) ?>"><br>
        <button>Enviar</button>
    <?php endif;  ?>   
</body>
</html>