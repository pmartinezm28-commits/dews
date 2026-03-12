<?php 
    class bd{
        private $conexion;

        public function __construct() {
            try {
                $config = require('config.php');      

                $this->conexion =  new PDO("sqlite:./bd/juego_rol.sqlite");
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

            $sentencia -> execute($parametros);

            return $this->conexion->lastInsertId();
        }

         // Busca en la base de datos la query proporcionada
        public function buscar($sql, $parametros){
            $sentencia = $this->conexion->prepare($sql);

            $sentencia -> execute($parametros);

            $tuplas = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            return $tuplas;
        }
    }