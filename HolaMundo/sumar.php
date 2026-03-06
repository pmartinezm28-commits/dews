<!DOCTYPE html>
<html lang=es>
<!--Código embebido -->

<head>
	<meta charset=utf-8 />
	<meta name=viewport content='width=device-width, initial-scale=1' />
	<meta name=author content='Pablo' />
	<link rel=icon type=image/x-icon href=/img/logo.png />
	<title>Variables en PHP</title>

</head>
	<?php
		// Datos de entrada
		$sumador = 0;
		
		$numeros = [1, 2, 3];
		echo "<br/>Resultado: ". calcularEsfuerzo($numeros);
		
		$numeros = [3, 1, 4, 2];
		echo "<br/>Resultado: ". calcularEsfuerzo($numeros);
		
		$numeros = [30, 40, 50, 60];
		echo "<br/>Resultado: ". calcularEsfuerzo($numeros);
		
		$numeros = [0]; 
		function calcularEsfuerzo ($numeros){				
			$esfuerzo = 0;
			while (count($numeros) >= 2){
				// 1. Ordeno array
				sort($numeros);
				//print_r($numeros);
				
				// 2.Sumo los dos primeros y los añado al esfuerzo
				
				$aux = $numeros[0] + $numeros[1];
				$esfuerzo += $aux;
				array_push($numeros, $aux);
				//print_r($numeros . "<br />");
				array_splice($numeros, 0, 2);
			}	
		}
		
	?>
</body>

</html>
