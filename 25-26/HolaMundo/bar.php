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
		$categorias = ['D','A','M','I','C'];
		$menos_vendido = "";
		$mas_vendido = "";
		
		echo "<pre>";
		$ventas = [
			'D' => 2.8,
			'C' => 48.0,
			'A' => 8.00
		];
		// 1. Completamos el array
		foreach($categorias as $categoria){
			if (!array_key_exists($categoria,$ventas))
				$ventas[$categoria] = 0;
		}
		// 2. Ordenamos descendente
		asort($ventas); // asort ordena manteniendo indices
		print_r($ventas);
		
		$claves = array_keys($ventas); // Sacamos un array con el indice numerico
		
		if ($ventas[$claves[0]] == $ventas[$claves[1]]){
			$menos_vendido = "EMPATE";	
		}
		else
			$menos_vendido = array_keys($ventas)[0];
		
		
		$ultimo = count($claves) - 1 ;
		if ($ventas[$ultimo] == $ventas[$ultimo - 1]){
			$mas_vendido = "EMPATE";	
		}
		else
			$mas_vendido = $claves[$ultimo];
		echo "Menos vendido: ". $menos_vendido ;
		echo "Más vendido: ". $mas_vendido;
		
		// Falta asociar las categorias con el nombre que le corresponda creando otro array asociativo
		echo "</pre>";
	?>
</body>

</html>
