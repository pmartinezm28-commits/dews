<!-- Crea una función extraer que reciba una matriz bidimensional y un array con dos coordenadas, cada una formada por un array de dos números enteros.
La función devolverá la submatriz indicada por las coordenadas. Así, si la matriz recibida es de 4 filas y 5 columnas y la matriz de coordenadas
recibida es [[0,2],[2,4]] la función deberá devolver la submatriz formada por los elementos que están desde la primera fila (0), tercera columna (2) 
hasta la tercera fila (2) y quinta columna (4). Si las coordenadas no fueran correctas (fuera de la matriz) la función lanzará una excepción.. -->

<?php 

function extraer( array $matriz, array $coordenadas): array{
    $filas = count($matriz);
    $cols  = count($matriz[0]);
    [$fila1, $col1] = $coordenadas[0];
    [$fila2, $col2] = $coordenadas[1];

    // Validamos que las coordenadas están dentro de la matriz
    if ($fila1 < 0 || $fila1 >= $filas || $col1 < 0 || $col1 >= $cols || $fila2 < 0 || $fila2 >= $filas || $col2 < 0 || $col2 >= $cols) {
        throw new Exception("Las coordenadas están fuera de rango de la matriz");
    }

    $matriz_res = [];
    for ($i = $fila1; $i <= $fila2; $i++) {
        $matriz_res[$i] = [];
        for ($j = $col1; $j <= $col2; $j++) {
            $matriz_res[$i][] = $matriz[$i][$j];
        }
    }

    return $matriz_res;
}

try{
$matriz = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10],
    [11, 12, 13, 14, 15],
    [16, 17, 18, 19, 20],
];

    $matriz_res = extraer($matriz, [[0, 2], [2, 4]]);
    echo "Matriz resultado: <br>";
    echo "<pre>";
    print_r($matriz_res);
    echo "</pre>";
}
catch(Exception $e){
    echo "Error:" . $e->getMessage();
}