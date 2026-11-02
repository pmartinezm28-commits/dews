<?php
    declare(strict_types=1);
    $caducidad = time() + 60 * 60 * 24 * 7;
    $mensaje = "";
    if (!isset($_COOKIE['visitas'])){    
        setcookie('visitas', '1', $caducidad);
        $mensaje = 'Esta es tu primera visita';
    }
    else{
        $visitas = (int) $_COOKIE['visitas'];
        $visitas ++;
        setcookie("visitas", (string) $visitas, $caducidad);
        $mensaje = "Es es la visita número: " . htmlspecialchars($_COOKIE['visitas']);
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){  
        if(isset($_POST['btnReiniciar'])){
            setcookie('visitas', '1', time() - 3600);
            $mensaje = 'Esta es tu primera visita';
        }
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie2</title>
</head>
<body>
    <?php 
        if (isset($mensaje)){
            echo '<p>'. $mensaje .'</p>';
        }
    ?>
    
    <form action="" method="POST">
        <button name="btnReiniciar" >Reiniciar Contador</button>
    </form>
</body>
</html>