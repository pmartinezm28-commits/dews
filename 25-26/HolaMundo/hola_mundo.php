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

<body>
	<?php 	
		//phpinfo();
		
		echo "<h1>¡Hola mundo!</h1>";
		
		$edad = 25;
		
		$precio = 19.99;
		
		$nombre = "Miguel jaque";
		
		$profesor = true;
		
		echo "<p>La variable $edad tiene el valor ".$edad."</p>";
		echo '<p>La variable $edad tiene el valor '.$edad."</p>";
		
		// Comentario
		/*
			Comentaraio 
			multilínea 
			como en java
		*/
		
		
		
		// Arrays
		$frutas = array("Manzana","Pera","Melon", 56, true);
		
		echo '<p>En el array tenemos '.$frutas[1].'</p>';
		print_r($frutas);
		
		// Arrays Asociativo
		$estudiante = [
			"nombre" => "Miguel",
			"edad" => 25,
			"edad" => 25,
			"curso" => '2DAW',
		];
		
		echo "<p>En el array tenemos \"".$estudiante['nombre']."\" </p>";
		
		//OBJETOS 	
		$objeto = new StdClass();
		$objeto -> tipo = "Mineral";
		$objeto -> peso = 3.5;       //Kg
		
		
		/*Tipos Especiales*/
		$variableNula = null;
		$variableNoDefinida;
		echo 'La variable $variableNula vale ';
		var_dump($variableNula);
		echo "<br/>";
		
		
		echo '<p>El tipo de $edad es: '.gettype($edad). '</p>';
		echo '<p>¿Es $nombre un string?: '.is_string($nombre). '</p>';
		
		
		// constante
		define ("PI", 3.141592);
		echo "<p>El valor de PI es: ". PI ."</p>";
		
		const FI = 1.93;
		echo "<p>El valor de FI es: ". FI ."</p>";
		
		// if
		// swtich
		// op ternario
		
	?>	
	
</body>

</html>


	