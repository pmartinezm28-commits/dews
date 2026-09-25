<?php

class Desarrollador extends Empleado{
    private array $lenguaje;
    public function __construct (string $nombre, float $salario, array $lenguaje){
        parent::__construct ($nombre, $salario);
        $this -> lenguaje = $lenguaje;

    }

    // Salario + 10% por cada lenguaje
    public function CalcularBono() : float{
        $total = count($this -> lenguaje);
        $salario = $this -> getSalario();

        $salario_porcentaje = $salario * 10/100 * $total;  
        $salario_final = $salario_porcentaje + $salario; 
        return $salario_final;
    }
}