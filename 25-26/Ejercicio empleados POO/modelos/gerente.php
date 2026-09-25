<?php
require_once("empleado.php");

class Gerente extends Empleado{
    private float $bonus;
    public function __construct (string $nombre, float $salario, float $bonus){
        parent::__construct($nombre, $salario);
        $this -> bonus = $bonus;
    }

    public function CalcularBono() : float{
        return $this -> bonus + $this -> getSalario();
    }
}