<?php
    if(!empty($_POST)){
        // datos victima
        $agresor = $_POST["agresor"];
        
        // datos agresor
        $victima = $_POST["victima"];

        // Creamos un array para asignar el valor correspondiente
        $valores = [
            'no_apreciado' => 0,
            'bajo' => 1,
            'medio' => 2,
            'alto' => 3,
            'extremo' => 4
        ];

        $valoresx2 = [
            'no_apreciado' => 0,
            'bajo' => 2,
            'medio' => 4,
            'alto' => 6,
            'extremo' => 8
        ];

        // Recogemos los valores(no apreciado, bajo, etc) 
        // Asignamos a su vez un valor mediante el array (clave => valor)  
        $psicologica = $valores[$_POST['psicologica']];
        $fisica = $valores[$_POST['fisica']];
        $sexual = $valores[$_POST['sexual']];
        $armas = $valores[$_POST['armas']];
        $amenazas = $valores[$_POST['amenazas']];
        $escalada = $valores[$_POST['escalada']];
        $cautelares = $valoresx2[$_POST['cautelares']];
        $celos = $valores[$_POST['celos']];
        $control = $valores[$_POST['control']];
        $adicciones = $valores[$_POST['adicciones']];
        $antecedentes = $valoresx2[$_POST['antecedentes']];
        $suicidio = $valores[$_POST['suicidio']];
        $discapacidad = $valores[$_POST['discapacidad']];
        $sin_apoyo = $valores[$_POST['sin_apoyo']];
        $extranjera = $valores[$_POST['extranjera']];
        $menores = $valores[$_POST['menores']];
        $rompimiento = $valoresx2[$_POST['rompimiento']];
        $miedo_muerte = $valoresx2[$_POST['miedo_muerte']];

        $cont_nivel_riesgo = $psicologica + $fisica + $sexual + $armas + $amenazas + $escalada +
                $cautelares + $celos + $control + $adicciones + $antecedentes +
                $suicidio + $discapacidad + $sin_apoyo + $extranjera + $menores +
                $rompimiento + $miedo_muerte;

        
        include("../vista/nivel_riesgo.php");
    }
    