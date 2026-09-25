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
		$n_comp	= 3;
		$litros_mayor = 500;
		$dif = 30;
		$litros_acuario = 0;
		
		for($i = 0; $i < $n_comp; $i++){
			$litros_acuario += $litros_mayor - ($dif * $i);
			
		}
		echo "Los litros del acuario son: $litros_acuario  <br />";
		
	?>
</body>

</html>
