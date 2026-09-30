
<?php
    /* 
    Desarrolla una función que reciba una matriz y un número entero y devuelva
    otra matriz con las columnas de la matriz inicial que contenga el número indicado
   
    1 Análisis
    Datos de entrada:
        $matriz: array
        $numero: int

    Datos de salida:
        $matriz_resultado: array

    2 Tabla de ejmplos
        Ejemplo 1:
            $matriz: [[1,2,3],
                      [4,5,6,]]
            $numero: 6
            $matriz_res:  [[3],[6]]
        Ejemplo 2:
            $matriz: [[1,2,3],
                      [4,5,6,],
                      [2,4,-3]]
            $numero: 2
            $matriz_res:  [[1,2],[4,5],[2,4]]     
        Ejemplo 3:
            $matriz: [[1,2,3],
                      [4,5,6,],
                      [2,4,-3]]
            $numero: 42
            $matriz_res:  [[],[]]    
        Ejemplo 4:
            $matriz: [[],
                      []]
            $numero: 4
            $matriz_res:  [[],
                      []]
        Ejemplo 5:
            $matriz: [["Zapato", 5, 6],
                      [2, 4, 6]]
            $numero: 4
            $matriz_res:  [["Zapato"],
                      [2]]
        Ejemplo 6:              
    3 Descripción del algorimto
        Recorro las columnas de la $matriz y si contiene el $número la incluyo en $matriz_resultado

    4. Andamio 
    5. Resolución
    
    */
    // Recorremos una matriz por las columnas y buscamos un número entero en ella
    function sacar_columnas(array $matriz, int $numero): array{
        $matriz_resultado = [[],[]];
        // Recorremos la matriz por las columnas
        for($col = 0; $col < count($matriz[0]); $col++){
            // Recorro cada columna
            for($fila = 0; $fila < count($matriz); $fila++){
                // Compruebo si contiene el número pedido
                if($matriz[$fila][$col] === $numero){
                    $matriz_resultado = mete_col_resultado($matriz, $col, $matriz_resultado);
                }
            }
        }
        return $matriz_resultado;
    }

    
    // Dada una $matriz y la $col, devolvemos una matriz_resultado que contenga las columnas de la $matriz
    function mete_col_resultado(array $matriz, int $col, array $matriz_resultado): array{
        static $col_resultado = 0;
        for($fila = 0; $fila < count($matriz); $fila ++){
            $matriz_resultado[$fila][$col_resultado]= $matriz[$fila][$col];
        }
        $col_resultado ++;
        return $matriz_resultado;
    }

//Ejemplo 1:
$matriz = [[1,2,3], [4,5,6,]];
$numero = 6;
echo "<pre>";
echo "Ejemplo 1: <br>";
$resultado = sacar_columnas($matriz, $numero);
print_r($resultado);

echo "Ejemplo 2: <br>";
/* Ejemplo 2: */
$matriz = [[1,2,3],[4,5,6,],[2,4,-3]];
$numero = 2;
$resultado = sacar_columnas($matriz, $numero);
print_r($resultado);
echo "</pre>";


