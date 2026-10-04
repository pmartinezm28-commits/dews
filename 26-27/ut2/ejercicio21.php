<!-- Crea una función intercambiar(&$a, &$b) que intercambie el valor de dos variables pasadas por referencia.
  Después de llamarla, comprueba que los valores originales han cambiado. -->

<?php
$a = 10;
$b = 99;

echo "Antes: " . "<br>";

echo "Valor de a: ". $a . "<br>";

echo "Valor de b: ". $b . "<br>";
	

function intercambiar(&$a, &$b){
    $aux = $a;
    $a = $b;
    $b = $aux;
}


intercambiar($a, $b);


echo "Después: " . "<br>";

echo "Valor de a: ". $a . "<br>";

echo "Valor de b: ". $b . "<br>";
	