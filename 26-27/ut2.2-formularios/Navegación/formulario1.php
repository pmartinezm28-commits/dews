<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $texto = $_POST["texto"] ?? "";
        $idioma = $_POST["idioma"] ?? "";
        $pais = $_POST["pais"] ?? "";
        if(isset($texto) && isset($idioma) && isset($pais)){
            echo "Texto: ". $texto . "<br>"; 
            echo "Idiomas: ". $idioma . "<br>"; 
            echo "Pais: ".$pais . "<br>"; 
        }
    }

    // Navegación
    if($_SERVER["REQUEST_METHOD"] === 'POST'){  
        if(isset($_POST["form2"])){
            require("formulario2.php");
            die();
        }
        if(isset($_POST["form3"])){
            require("formulario3.php");
            die();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1</title>
</head>
<body>
    <h1>Formulario 1</h1>
    <form method="post">
        <input type="text" name="texto" value="<?php if (isset($texto)) echo $texto ?>"> <br>
        <input type="text" name="pais" hidden value="<?php if (isset($pais)) echo $pais?>">
        <input type="hidden" name="idioma" value="<?php if (isset($idioma)) echo $idioma ?>">
        <button name="form2">Enviar a F2</button>
        <button name="form3">Enviar a F3</button>
    </form>
</body>
</html>