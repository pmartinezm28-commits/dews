<!--
Crea tres funciones: esPar($n), factorial($n) y esPrimo($n). Cada una debe devolver un valor booleano o numérico. 
Pruébalas con varios valores y muestra los resultados en una lista. 
-->

<?php

function esPar(int $n): bool{
    $es_par = false;
    if($n % 2 == 0){
        $es_par = true;
    }
    return $es_par;
}
//echo "¿Es par 4: ? " . $cadena;

function factorial (int $n): int {
    $resultado = $n;
    for($i = $n-1; $i > 1; $i--){
        $resultado *= $i;
    }

    return $resultado;
}


function esPrimo(int $n): bool{
    $es_primo = true;
    for($i = $n - 1; $i > 1 && $es_primo; $i--){
        if($n % $i == 0){
            $es_primo = false;
        }
    }
    return $es_primo;
}

//$es_par = esPrimo(10);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
    
</head>
<body>
    <h1>Ejercicio 18</h1>
    <ul>
        <?php
        $valor = 10;
        $cadena = esPar($valor) ? "Es par" : "Es impar";
        $cad = esPrimo($valor) ? "Es primo" : "No es primo"?>

        <li> 
        <?= "Valor: $valor. ¿Es par?: " . $cadena . 
        ". Factorial: " . factorial($valor) . 
        ". ¿Es primo?: " . $cad ?>  </li>
        

        <?php
        $valor = 11;
        $cadena = esPar($valor) ? "Es par" : "Es impar";
        $cad = esPrimo($valor) ? "Es primo" : "No es primo" ?>

        <li>
        <?= "Valor: $valor. ¿Es par?: " . $cadena . 
        ". Factorial: " . factorial($valor) . 
        ". ¿Es primo?: " . $cad ?>

        </li>

        <?php
        $valor = 5;
        $cadena = esPar($valor) ? "Es par" : "Es impar";
        $cad = esPrimo($valor) ? "Es primo" : "No es primo" ?>

        <li>
        <?= "Valor: $valor. ¿Es par?: " . $cadena . 
        ". Factorial: " . factorial($valor) . 
        ". ¿Es primo?: " . $cad ?>

        </li>
    </ul>



</body>
</html>	
	
	