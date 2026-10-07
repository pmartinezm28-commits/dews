<!--
Crea una función saludar($nombre) que devuelva una cadena de saludo. 
Llámala con tres nombres distintos y muestra los resultados. Añade un valor por defecto para el parámetro.
 -->
<?php
function saludar(string $nombre = "usuario"):string{
    return "Saludos $nombre <br>";
}

$cad = saludar("Juan");
echo $cad;

$cad = saludar("Jose");
echo $cad;

$cad = saludar("Luis");
echo $cad;

echo saludar();