<!-- Crea una función estadisticas(array $numeros) que devuelva un array asociativo con el mínimo, el máximo, la suma y la media de un array de números.
  Si el array está vacío, la función debe lanzar una excepción. Llámala y muestra el resultado. -->

<?php

    $numeros = [2,5,10,80,17,55,34,26,100];
    $num = [];

    function estadisticas(array $numeros): array{
        if(empty($numeros)){
            throw new Exception("Excepción: El array está vacío");
        }
        else{
            $array_res = ["minimo" => 999999999, "maximo" => 0, "suma" => 0, "media" => 0];
            $array_res["minimo"] = min($numeros);
            $array_res["maximo"] = max($numeros);
            $cont = 0;
            foreach($numeros as $num){
                $cont += $num;
            }
            $array_res["suma"] = $cont;
            $array_res["media"] = $cont/count($numeros);

        }
        return $array_res;
        
    }
    try{
        $array = estadisticas($numeros);
        print_r($array);

        print_r(estadisticas($num));
    }
    catch(Exception $e){
        echo "Error ". $e->getMessage();
    }
