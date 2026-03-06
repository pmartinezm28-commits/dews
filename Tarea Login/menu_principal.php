<?php
    
    echo "Hola ". ($_GET['nombre']); 
    if($_GET['clave'] == 'contra'){
        echo 'Contraseña correcta. ';
    }
    else{
        echo 'Contraseña incorrecta. ';
    }
