<!-- Crea una función recursiva factorial($n) que calcule el factorial de un número entero.
La función debe lanzar una excepción si el número es negativo o si supera un límite razonable (por ejemplo, 20). 
Captura la excepción y muestra el mensaje correspondiente.
-->
<?php
    function factorial(int $n){
        if($n < 0){
            throw new Exception("El valor introducido no puede ser negativo ");
        }
        else if($n > 20){
            throw new Exception("El valor introducido no puede ser superior a 20 ");
        }
        if($n == 1){
            return 1;
        }
        else{
            return $n * factorial ($n - 1);
        }
    }
    try {
    $num = 5;
    $res = factorial($num);
    echo "El factorial de $num es: " . $res. "<br>";

    $num = -4;
    $res = factorial($num);
    echo "El factorial de $num es: " . $res . "<br>";

    $num = 21;
    $res = factorial($num);
    echo "El factorial de $num es: " . $res . "<br>";
    } catch (Exception $e){
        echo "Excepción. " . $e->getMessage();
    }