<?php 
    declare(strict_types=1);
    var_dump($_POST);
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if (isset($_POST['btn_guardar'])){
            $caducidad = time() + 60 * 60 * 24 * 60;
            // Valores por defecto
            $tema = "claro";
            $tamanho = "normal";
            $num_elemntos = '10';

            // Compruebo si llegan tema, tamanho y num_elementos del form
            // Si llegan los guardo en la variable, si no valor por defecto
            if(isset($_POST['input_tema'])){
                if($_POST['input_tema'] === 'claro' || $_POST['input_tema'] === 'oscuro'){

                    $tema = $_POST['input_tema'];
                    setcookie("tema", $tema, [
                    'expires' => $caducidad,
                    'path' => '/', // Se enviará a la ruta en la que se encuentre este archivo
                    'secure' => 'no', // Al trabajar en xamp no contamos con https, por lo tanto no podemos usarlo 
                    'httponly' => 'no', // Evitamos el procesamiento de la cookie desde javascript
                    'samesite' => 'strict' // Impedimos que las cookies de otras paginas lleguen a la nuestra
                ]); 
                }
            }
            else {
                setcookie("tema", $tema, [
                    'expires' => $caducidad,
                    'path' => '/', // Se enviará a la ruta en la que se encuentre este archivo
                    'secure' => 'no', // Al trabajar en xamp no contamos con https, por lo tanto no podemos usarlo 
                    'httponly' => 'no', // Evitamos el procesamiento de la cookie desde javascript
                    'samesite' => 'strict' // Impedimos que las cookies de otras paginas lleguen a la nuestra
                ]); 
            }

            if(isset($_POST['input_tamanho'])){
                echo " POST[input_tamanho] " . $_POST['input_tamanho'];
                if($_POST['input_tamanho'] === 'pequeño' || $_POST['input_tamanho'] === 'normal' || 
                    $_POST['input_tamanho'] === 'grande'){
                        $tema = $_POST['input_tamanho']; 
                        // Igual que en la cookie anterior
                        setcookie("tamanho", $tamanho, [
                            'expires' => $caducidad,
                            'path' => '/', 
                            'secure' => 'no',
                            'httponly' => 'no',
                            'samesite' => 'strict'
                        ]);
                }
            }
            else {
                setcookie("tamanho", $tamanho, [
                    'expires' => $caducidad,
                    'path' => '/', 
                    'secure' => 'no',
                    'httponly' => 'no',
                    'samesite' => 'strict'
                ]);    
            }
            
            if(isset($_POST['input_num_elementos'])){
                if($_POST['input_num_elementos'] === '10' || $_POST['input_num_elementos'] === '20' || 
                    $_POST['input_num_elementos'] === '50'){
                    $num_elemntos = $_POST['input_num_elementos'];
                    
                    // Igual que en la cookie anterior
                    setcookie("num_elementos", "10", [
                        'expires' => $caducidad,
                        'path' => '/', 
                        'secure' => 'no',
                        'httponly' => 'no',
                        'samesite' => 'strict'
                    ]);
                }
            }
            else {    
                setcookie("num_elementos", "10", [
                    'expires' => $caducidad,
                    'path' => '/', 
                    'secure' => 'no',
                    'httponly' => 'no',
                    'samesite' => 'strict'
                ]);
            }
        }
        // Si se ha pulsado el botón se borran las cookies
        if (isset($_POST['btn_restablecer'])){
            setcookie("tema", "", time() - 3600);
            setcookie("tamanho", "", time() - 3600);
            setcookie("num_elementos", "", time() - 3600);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto Cookies </title>
</head>
<body>
    <!-- Aplicar el tema y el tamaño de letra -->
    <h1>Selección de preferencias</h1>
    <form action="" method="post">
        <label> Tema </label>
        <input type="text" name="input_tema" value="<?php if (isset($_COOKIE['tema'])) echo $_COOKIE['tema'] ?>">
        <br><br>
        
        <label> Tamaño </label>
        <input type="text" name="input_tamanho" value="<?php if (isset($_COOKIE['tamanho'])) echo $_COOKIE['tamanho'] ?>">
        <br><br>
        
        <label> Número de elementos </label>
        <input type="text" name="input_num_elementos" value="<?php if (isset($_COOKIE['num_elementos'])) echo $_COOKIE['num_elementos'] ?>">
        <br><br>

        <button name="btn_guardar">Guardar preferencias</button>

        <button name="btn_restablecer">Restablecer</button>
    </form>
</body>
</html>