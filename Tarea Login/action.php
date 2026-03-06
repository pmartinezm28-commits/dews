
<?php 
    if(empty($_GET)){    
        include('login.html');
    }
    else{
        //include('menu_principal.php');
        echo "Hola ". ($_GET['nombre']). " "; 
        if($_GET['clave'] == 'contra'){
            echo 'Contraseña correcta. ';
        }
        else{
            echo 'Contraseña incorrecta. ';
        }
    }
    
  // No cerrar el php  
?>