<!-- Crea una función sumar_traza que reciba una matriz bidimensional de números y devuelva la suma de los elementos de su diagonal principal 
 (desde arriba a la izquierda hasta abajo a la derecha). Si algún elemento de la diagonal no fuera de tipo numérico, la función lanzará una excepción. -->
 <?php
 $matriz = [[1,2,3],[3,"hola",5],[6,7,8]];
 $matriz = [[1,2,3],[3,4,5],[6,7,8]];

function sumar_traza($matriz): int{
    $suma = 0;
    for ($i=0; $i < count($matriz); $i++) { 
        for ($j=0; $j < count($matriz[$i]); $j++) { 
            if($i == $j){
                if(gettype($matriz[$i][$j]) == "string"){
                    throw new Exception("Sólo se permiten valores numéricos");
                }
                else{
                    $suma += $matriz[$i][$j];
                }
            }
        }    
    }
    return $suma;
}
try{
    $suma = sumar_traza($matriz);
    echo "La suma es: $suma";
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}