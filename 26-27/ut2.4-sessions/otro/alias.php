<?php
session_start();
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['alias'])){
        $error = "Ha pasado algo malo.";
    }
    else{
        $alias = htmlspecialchars(trim($_POST['alias'] ?? ''));
        if ($alias !== '') {
            if(strlen($alias) < 3){
                $error = "Es corto";
            }
            else{
                $_SESSION['alias'] = $alias;
                header('Location: perfil.php');
                exit;
            }
        }
        else{
            $error = "Error gordo";
        }
    }
    
}
?>
<form method="post">
    <label>Alias:</label><br>
    <input id="alias" name="alias" required><br>
    <?php
        if(isset($error) && !empty($error)){
            echo $error;
        }
    ?>

    <button>Guardar</button>
</form>