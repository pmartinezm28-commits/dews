<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = trim($_POST["nombre"]) ?? "";
        $correo = trim($_POST["correo"]) ?? "";
        $edad = $_POST["edad"] ?? "";
        $errores = []; // Array de cadenas de errores
        $correcto = []; // Array de cadenas de valores válidos
        
        if(!isset($nombre) || empty($nombre)){
            $errores [0] = "El nombre es incorrecto";
        }
        else{
            $correcto[0] = htmlspecialchars($nombre);
        }
        if(!isset($correo) || empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores [1] = "El correo es incorrecto";
            
        }
        else{
            $correcto[1] = htmlspecialchars($correo);
        }
        if(!isset($edad) || empty($edad) || !is_numeric($edad) || $edad < 0){
            $errores [2] = "La edad es incorrecta";
        }
        else{
            $correcto[2] = $edad;
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18</title>
</head>
<body>
     <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errores) && !empty($correcto)) : ?>
    <form action="" method="post">
        <label>Nombre</label> <input type="text" name="nombre" value="<?php if(!empty($correcto[0])) echo $correcto[0] ?>"> <?php if(!empty($errores[0])) echo $errores[0]; ?> <br>
        <label>Correo</label> <input type="text" name="correo" value="<?php if(!empty($correcto[1])) echo$correcto[1] ?>"> <?php if(!empty($errores[1])) echo $errores[1]; ?> <br>
        <label>Edad</label> <input type="text" name="edad" value="<?php if(!empty($correcto[2])) echo $correcto[2] ?>"> <?php if(!empty($errores[2])) echo $errores[2]; ?> <br>
        <input type="submit">   
    </form>
    <?php else: ?>
        <form action="" method="post">
        <label>Nombre</label> <input type="text" name="nombre">  <br>
        <label>Correo</label> <input type="text" name="correo">  <br>
        <label>Edad</label> <input type="text" name="edad"> <br>
        <input type="submit">   
    </form>
    <?php endif; ?>
    
</body>
</html>