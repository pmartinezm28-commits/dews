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
        if(isset($_POST["form1"])){
            require("formulario1.php");
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
    <title>Document</title>
</head>
<body>
    <h1>Formulario 2</h1>
    <form action="formulario3.php" method="post">
        <select name="idioma" id="idioma">
            <option value="Español" <?= $idioma == "Español" ? "selected" : ""  ?> >Español</option>
            <option value="Ingles" <?= $idioma == "Ingles" ? "selected" : ""  ?>>Inglés</option>
            <option value="Frances" <?= $idioma == "Frances" ? "selected" : ""  ?>>Francés</option>
        </select>  
        <input type="text" name="texto" hidden value="<?php if (isset($texto)) echo $texto?>">
        <input type="hidden" name="pais" value="<?php if (isset($pais)) echo $pais ?>">
        <br>
        <button name="form1">Enviar a F1</button>
        <button name="form3">Enviar a F3</button>   
    </form>
</body>
</html>