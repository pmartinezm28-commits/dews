<?php
var_dump($_POST);
session_start();
if (isset($_POST['borrar'])){
    $_SESSION = [];
    if(ini_get('session.use_cookies')){
        $parametros = session_get_cookie_params();
        setcookie(session_name(), '' , [
            'expires' => time() - 3600,
            'path' => $parametros['path'],
            'domain' => $parametros['domain'],
            'secure' => $parametros['secure'],
            'httponly' => $parametros['httponly'],
            'samesite' => $parametros['samesite'] ?? 'Lax',
        ]);
    }
    header('Location: login.php');
    session_destroy();
    die();
}
$usuario = $_SESSION['usuario'] ?? "Invitado";
$visitas = $_SESSION['visitas'] ?? 0;
if (isset($_SESSION['visitas'])){
    $_SESSION['visitas'] ++;
}

echo 'Hola ' . htmlspecialchars($usuario, ENT_QUOTES, 'UTF-8');
echo '<p>Visitas: ' . $visitas . '</p>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="" method='post'>

    <button name="borrar">Borrar Sesión</button>
</form>