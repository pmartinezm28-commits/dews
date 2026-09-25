<!DOCTYPE html>
<html lang=es>
<!--Código embebido -->

<head>
	<meta charset=utf-8 />
	<meta name=viewport content='width=device-width, initial-scale=1' />
	<meta name=author content='Miguel Jaque <mjaque@migueljaque.com' />
	<link rel=icon type=image/x-icon href=/img/logo.png />
	<title>Variables en PHP</title>

</head>
	<?php
			$legionarios = 0;
			$escudos = 0;
			
			//Falta generalizar(bucle) 
			$legionarios = 20;
			$total_escudos = 0 ;
			
			while($legionarios > 0){
				
				$lado_mayor = floor(sqrt($legionarios));
				$total_escudos += escudosCuadrado($lado_mayor);
				$legionarios -= $lado_mayor**2;
				
			}	
			
			echo "Necesitan $total_escudos escudos <br />";
			function escudosCuadrado($lado){
				return $lado**2 + $lado * 4; 
			}
			
			
			
		
	?>
</body>

</html>
