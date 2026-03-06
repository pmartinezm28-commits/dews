<?php

class BD{
    
    private $conexion;
    
    public function __construct(){
        try {
            $config = require('config.php');             
            $host = $config['bd_host'];
            $nombre = $config['bd_nombre'];
            $usuario = $config['bd_usuario'];
            $clave = $config['bd_clave'];
            $stringConexion = "mysql:host=$host;dbname=$nombre";

            $this->conexion = new PDO($stringConexion, $usuario, $clave);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $excepcion) {
            header ('HTTP/2 500 Internal Server Error');
            if($config['debug']){
                echo "Error en servicios/db: " .$excepcion . "<br>";
            }
        }
    }

    public function insertar($sql, $parametros){
        $sentencia = $this->conexion->prepare($sql);
        
        // Ejecutar con los parámetros
        $sentencia->execute($parametros);
        
        // Obtener y mandar el ID del registro insertado
        return $this->conexion->lastInsertId();
    }

    public function seleccionar ($sql, $parametros = null){
        $sentencia = $this->conexion->prepare($sql);

        $sentencia->execute($parametros);
        
        return $sentencia->fetchALL(PDO::FETCH_ASSOC);
    }
}