<?php 
	// Datos entrada
	$num_compartimentos = 6;
	$capacidad_maxima = 1200;
	$diferencia = 40;
	
	$litros_totales = 0;
	
	for($i = 0; $i < $num_compartimentos; $i++){
		$litros_totales += $capacidad_maxima - $diferencia * $i;
	}		
	
	echo "Litros totales: $litros_totales";