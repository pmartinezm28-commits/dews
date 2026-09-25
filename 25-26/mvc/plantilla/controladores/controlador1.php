<?
try{
$matriz = [[1, 2, 3],[4, 5, 6]];
$vector = [7, 8];
$indice = 0;
function sustituirMatriz(){
     $matriz = [[1, 2, 3],[4, 5, 6]];
$vector = [7, 8];
$indice = 0;

 for($i = 0; $i <= $matriz; $i++){
  for($j = 0; $j <= $vector.lenght; $j++){
    if($i == $indice){
      $matriz[$i] = $vector[j];
      print $matriz;
    }
   }
  }
 }
 sustituirMatriz();
}catch(D){
  $e = throw new Exception();
  return $e;
}
