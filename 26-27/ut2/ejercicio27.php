<!-- Crea una función totalizar que reciba una matriz bidimensional de números y devuelva otra matriz (sin modificar la original)
  con una columna adicional en la que figurará la suma de cada fila y una fila adicional en la que figurará la suma de cada columna.
   Si algún elemento de la matriz no fuera de tipo numérico, la función lanzará una excepción. -->
<?php 
    $matriz1 = [[1,2,3],[3,4,5],[6,7,8]];
    /* $matriz2 = [[1,2,3],[3,"hola",5],[6,7,8]];    */

    
function totalizar(array $matriz): array{
    $suma_filas = [];
    $suma_col = [];
    $matriz_res = $matriz;
    for ($i=0; $i < count($matriz); $i++) { 
        $suma_filas[$i] = 0;
        for ($j=0; $j < count($matriz[$i]); $j++) { 
            if(gettype($matriz[$i][$j]) == "string"){
                throw new Exception("Todos los valores deben ser numéricos");
            }
            $suma_filas[$i] += $matriz[$i][$j];
            // Si la variable tiene valor lo usa, si no lo inicializa a 0
            $suma_col[$j] = ($suma_col[$j] ?? 0)+  $matriz[$i][$j]; 
        }    
        $matriz_res[$i][] = $suma_filas[$i];
    }

    $matriz_res[] = $suma_col; // Añadimos la fila
    
    return $matriz_res;
}
try{

    $matriz_res = [];
    $matriz_res = totalizar($matriz1);
    echo "La matriz es: ". "<br>";
    // Mostramos la matriz, de esta forma se aprecia mejor el resultado
    for ($i=0; $i < count($matriz_res); $i++) { 
        for ($j=0; $j < count($matriz_res[$i]); $j++) { 
            if(gettype($matriz_res[$i][$j]) == "string"){
                throw new Exception("Todos los valores deben ser numéricos");
            }
            echo $matriz_res[$i][$j] . " ";
        }    
        echo "<br>";
        
    }

}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}