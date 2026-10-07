<!-- Crea un archivo con una variable global $contador inicializada a 0 y una función incrementar() que la incremente usando global. 
 Llama a la función varias veces y muestra el valor final. 
 Después, crea otra función con una variable static que cuente cuántas veces se ha llamado y compárala con la anterior. -->

<?php
    $contador = 0;
    function incrementar (){
        global $contador;
        $contador ++;
    }
    incrementar ();
    incrementar ();
    incrementar ();

    echo "Contador: " . $contador . "<br>";

    function estatica (){
        static $cont = 0;
        $cont ++;
        echo "Se ha llamado: ". $cont . "<br>";
    }

    estatica();
    estatica();
    estatica();
    estatica();
    

	
	