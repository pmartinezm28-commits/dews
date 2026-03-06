<?php

abstract class Empleado{
    static private string $departamento = "Informatica";

    private string $nombre;
    private float $salario;

    public function __construct (string $nombre, float $salario){
        $this -> nombre = $nombre;
        $this -> salario = $salario;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function getDepartamento(){
        return self::$departamento;
    }

    public function getSalario(){
        return $this->salario;
    }


    public function setSalario(float $salario){
        $this -> salario = $salario;
    }

    public function setNombre(float $nombre){
        $this -> nombre = $nombre;
    }

    

    abstract function CalcularBono() : float;
}