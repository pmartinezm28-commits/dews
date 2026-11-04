<?php 
    declare(strict_types=1);

    // Valores por defecto
    $tema = $_COOKIE['tema'] ?? 'claro';
    $tamanho = $_COOKIE['tamanho'] ?? 'normal';
    $num_elementos = $_COOKIE['num_elementos'] ?? '10';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (isset($_POST['btn_guardar'])){
            $caducidad = time() + 60 * 60 * 24 * 60;

            // Compruebo si llegan tema, tamanho y num_elementos del form
            // Si llegan los guardo en la variable, si no valor por defecto
            if(isset($_POST['input_tema'])){
                if($_POST['input_tema'] === 'claro' || $_POST['input_tema'] === 'oscuro'){
                    $tema = $_POST['input_tema'];
                    setcookie("tema", $tema, [
                        'expires' => $caducidad,
                        'path' => '/', // Se enviará a la ruta en la que se encuentre este archivo
                        'secure' => 'false', // Al trabajar en xamp no contamos con https, por lo tanto no podemos usarlo 
                        'httponly' => 'false', // Evitamos el procesamiento de la cookie desde javascript
                        'samesite' => 'strict' // Impedimos que las cookies de otras paginas lleguen a la nuestra
                    ]); 
                }
            }
            else {
                setcookie("tema", $tema, [
                    'expires' => $caducidad,
                    'path' => '/', // Se enviará a la ruta en la que se encuentre este archivo
                    'secure' => 'false', // Al trabajar en xamp no contamos con https, por lo tanto no podemos usarlo 
                    'httponly' => 'false', // Evitamos el procesamiento de la cookie desde javascript
                    'samesite' => 'strict' // Impedimos que las cookies de otras paginas lleguen a la nuestra
                ]); 
            }

            if(isset($_POST['input_tamanho'])){
                if($_POST['input_tamanho'] === 'pequeño' || $_POST['input_tamanho'] === 'normal' || $_POST['input_tamanho'] === 'grande'){
                        $tamanho = $_POST['input_tamanho']; 
                        // Igual que en la cookie anterior
                        setcookie("tamanho", $tamanho, [
                            'expires' => $caducidad,
                            'path' => '/', 
                            'secure' => 'false',
                            'httponly' => 'false',
                            'samesite' => 'strict'
                        ]);
                }
            }
            else {
                setcookie("tamanho", $tamanho, [
                    'expires' => $caducidad,
                    'path' => '/', 
                    'secure' => 'false',
                    'httponly' => 'false',
                    'samesite' => 'strict'
                ]);    
            }
            
            if(isset($_POST['input_num_elementos'])){
                if($_POST['input_num_elementos'] === '10' || $_POST['input_num_elementos'] === '20' ||  $_POST['input_num_elementos'] === '50'){
                    $num_elementos = $_POST['input_num_elementos'];
                    
                    // Igual que en la cookie anterior
                    setcookie("num_elementos", $num_elementos, [
                        'expires' => $caducidad,
                        'path' => '/', 
                        'secure' => 'false',
                        'httponly' => 'false',
                        'samesite' => 'strict'
                    ]);
                }
            }
            else {    
                setcookie("num_elementos", "10", [
                    'expires' => $caducidad,
                    'path' => '/', 
                    'secure' => 'false',
                    'httponly' => 'false',
                    'samesite' => 'strict'
                ]);
            }
        }
        // Si se ha pulsado el botón se borran las cookies
        if (isset($_POST['btn_restablecer'])){
            setcookie("tema", "claro", time() - 3600);
            setcookie("tamanho", "normal", time() - 3600);
            setcookie("num_elementos", "10", time() - 3600);

            $tema = "claro";
            $tamanho = 'normal';
            $num_elemntos = '10';
        }
    }

    // Estilo
    if($tema === "oscuro"){
        $background_color = "black";
        $color = "white";
    }
    else {
        $background_color = "white";
        $color = "black";
    }

    switch($tamanho){
        case "pequeño":
            $font_size = '12px';
            break;
        case "grande":
            $font_size = '20px';
            break;
        default:
            $font_size = '16px';
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto Cookies </title>
</head>
<style>
    body{
        background-color: <?= $background_color ?>;
        color: <?= $color  ?>;
        font-size: <?= $font_size ?>;
    }
</style>
<body >
    <!-- Aplicar el tema y el tamaño de letra -->
    <h1>Selección de preferencias</h1>
    <form action="" method="post">
        <label> Tema </label>
        <input type="text" name="input_tema" value="<?php echo htmlspecialchars($tema)?>">
        <br><br>
        
        <label> Tamaño </label>
        <input type="text" name="input_tamanho" value="<?php echo htmlspecialchars($tamanho) ?>">
        <br><br>
        
        <label> Número de elementos </label>
        <input type="text" name="input_num_elementos" value="<?php echo htmlspecialchars($num_elementos) ?>">
        <br><br>

        <button name="btn_guardar">Guardar preferencias</button>

        <button name="btn_restablecer">Restablecer</button>
    </form>
</body>
</html>