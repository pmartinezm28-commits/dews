<!DOCTYPE html>
<html lang=es>
<!--Código embebido -->

<head>
	<meta charset=utf-8 />
	<meta name=viewport content='width=device-width, initial-scale=1' />
	<meta name=author content='Miguel Jaque <mjaque@migueljaque.com' />
	<link rel=icon type=image/x-icon href=/img/logo.png />
	<title>Multiplicaciones</title>

</head>
	<?php
	
		$valor_inicial = 30;
		$valor_final = 9;
		if($valor_inicial > $valor_final){
			$aux = $valor_inicial;
			$valor_inicial = $valor_final;
			$valor_final = $aux;
		}
		for($i = $valor_inicial; $i <=$valor_final; $i++){
			for($j = 1; $j <= 10; $j++){
				echo ("$i*$j = " .$i*$j ."</br>");
			}
			echo ("<p> ########## </p>");
		}
	?>
</body>

</html>
