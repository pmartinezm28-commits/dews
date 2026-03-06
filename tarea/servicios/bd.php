<?php 
    class bd{
        private $conexion;

        public function __construct() {
            try {
                $config = require('config.php');      

                // TODO: Poner nombre de base y url en config.php
                $this->conexion =  new PDO("sqlite:./bd/tareas.sqlite");
            } catch (PDOException $excepcion) {
                header ('HTTP/2 500 Internal Server Error');
                if($config['debug']){
                    echo "Error en servicios/db: " . $excepcion . "<br>";
                }
            }
        }

        // Realiza la insercion de una sql en la bd
        public function insertar($sql, $parametros){
            $sentencia = $this->conexion->prepare($sql);

            $sentencia -> execute ($parametros);
        }

        // Busca en la base de datos la query proporcionada
        public function buscar($sql, $parametros){
            $sentencia = $this->conexion->prepare($sql);

            $sentencia -> execute ($parametros);

            $tuplas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            return $tuplas;
        }

        public function borrar($sql, $parametros){
            
            $sentencia = $this->conexion->prepare($sql);

            $sentencia -> execute ($parametros);
        }

        public function seleccionar($sql, $parametros){
            
            $sentencia = $this->conexion->prepare($sql);

            $sentencia -> execute ($parametros);

            $tupla = $sentencia->fetch(PDO::FETCH_ASSOC);

            return $tupla;
        }
    } 