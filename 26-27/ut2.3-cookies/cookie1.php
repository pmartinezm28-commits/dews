
<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST["idiomas"])){
            $idiomas = htmlspecialchars($_POST['idiomas'] ?? "es");
            setcookie('idioma', (string) $idiomas, [
                'expires' => time() + 60 * 60 * 24 * 30
            ]);
        }
    }
    else{
        $idiomas = htmlspecialchars($_COOKIE['idioma'] ?? "es");
    }

?>    
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie1</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="idiomas" value="<?php echo $idiomas ?>" disabled><br><br>
        <select name="idiomas" id="idiomas">
            <option value="es" <?= $idiomas =='es' ? 'selected' : "" ?> >Español</option>
            <option value="en" <?= $idiomas =='en' ? 'selected' : ''?>>Ingles</option>
            <option value="po" <?= $idiomas =='po' ? 'selected' : ''?>>Portugues</option>
        </select>
        <br><br>
        <button>Enviar</button>
    </form>
</body>
</html>