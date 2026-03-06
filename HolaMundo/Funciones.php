<!DOCTYPE html>
<html lang=es>
<!--Código embebido -->

<head>
	<meta charset=utf-8 />
	<meta name=viewport content='width=device-width, initial-scale=1' />
	<meta name=author content='Miguel Jaque <mjaque@migueljaque.com' />
	<link rel=icon type=image/x-icon href=/img/logo.png />
	<title>Funciones</title>

</head>
	<?php
	
		$a = 7;
		$b = 5;
		
		echo '$a = '.$a .'; $b = '.$b. '<br />';
		cambiar($a, $b);
		/*
		$c = $a;
		$a = $b;
		$b = $c;
		*/
		echo 'Ahora $a = '.$a. '; $b = '.$b. '<br />';
		// Cambio por referencia: mediante &
		function cambiar(&$a, &$b){	
		
			$c = $a;
			$a = $b;
			$b = $c;	
		}
		
		
	?>
</body>

</html>
