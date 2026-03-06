<?php

    require_once("modelos/gerente.php");
    require_once("modelos/desarrollador.php");

    $gerente = new Gerente("Miguel", 57000 ,1300);
    
    echo"<pre>";  var_dump($gerente);echo" </pre>";

    echo "Bono a Gerente: "; echo $gerente -> CalcularBono(); echo"<br/>";
    $desarrollador = [];
    $lenguajes0 = array("java", "c++", "python");
    $lenguajes1 = array("java", "c++");
    $desarrollador[0] = new Desarrollador("Juan", 28000, $lenguajes0);

     echo "<br/>Bonus Desarrollador: "; echo $desarrollador[0] -> CalcularBono(); 
   
    
    echo"<pre>";  var_dump($desarrollador[0]); echo" </pre>";
    $desarrollador[1] = new Desarrollador("Ivan", 30000, $lenguajes1);

   
    echo "Bonus Desarrollador: "; echo $desarrollador[0] -> CalcularBono(); 


    // demostrar privacidad con try catch