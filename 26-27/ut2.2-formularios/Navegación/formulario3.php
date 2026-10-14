<?php
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $texto = $_POST["texto"] ?? "";
        $idioma = $_POST["idioma"] ?? "";
        $pais = $_POST["pais"] ?? "";
        if(isset($texto) && isset($idioma) && isset($pais)){
            echo "Texto: ". $texto . "<br>"; 
            echo "Idioma: ". $idioma . "<br>"; 
            echo "Pais: ".$pais . "<br>"; 
        }
    }

    // Navegación
    if($_SERVER["REQUEST_METHOD"] === 'POST'){  
        if(isset($_POST["form1"])){
            require("formulario1.php");
            die();
        }
        if(isset($_POST["form2"])){
            require("formulario2.php");
            die();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario 3</h1>
    <form method="post">
        <label><input type="radio" name="pais" value="espana" <?= $pais == "espana" ? "checked" : "" ?>  > España </label>
        <label><input type="radio" name="pais" value="ingles" <?= $pais == "ingles" ? "checked" : "" ?> > Inglés </label>
        <label><input type="radio" name="pais" value="francia" <?= $pais == "francia" ? "checked" : "" ?> > Francia </label>
        <br>
        <button name="form1">Enviar a F1</button>
        <button name="form2">Enviar a F2</button> 
        
        <input type="text" name="texto" hidden value="<?php if (isset($texto)) echo $texto?>">
        <input type="hidden" name="idioma" value="<?php if (isset($idioma)) echo $idioma ?>">
    </form>
</body>
</html>