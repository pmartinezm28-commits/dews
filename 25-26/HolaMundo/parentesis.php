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
		
		$caracteres = [];
		$caracteres[0] = '123';
		$caracteres[1] = '1)2&';
		$caracteres[2] = '(';
		$caracteres[3] = ')()';
		$caracteres[4] = '(()';
		$caracteres[5] = ')())';
		$caracteres[6] = '())(';
		$caracteres[7] = ')(';
		$caracteres[5] = '))))((((';
		
		
		
		foreach($caracteres as $caso)
			echo $caso . "->". estanBalanceados($caso). "<br/>";
		
		function estanBalanceados_2($caracteres,$posicion = 0){
			
		}
		
		
		
		function estanBalanceados($caracteres){
			
			$contAbiertos = 0;
			$contCerrados = 0;
			$correcto = true;	
			for($i = 0; $i < strlen($caracteres);$i++){
				if($caracteres[$i] == '('){
					$contAbiertos++;
				}
				
				if($caracteres[$i] == ')'){
					$contCerrados++;
				}
				
			$correcto = $contAbiertos == $contCerrados;	
			}
			
			if($correcto){
				return "YES";	
			}
			else
				return "NO";
		
		}
	?>
</body>

</html>
