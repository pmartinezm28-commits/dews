<?php 
    
    require_once('./servicios/bd.php');

    class orco{
        private $id;
        private $nombre;
        private $nivel;
        private $puntos_vida;
        private $clan;
        private $fuerza_extra;

        private $base_datos;

        public function __construct($nombre, $nivel, $puntos_vida, $clan, $fuerza_extra) {
            $this->id = null;
            $this->nombre = $nombre;
            $this->nivel = $nivel;
            $this->puntos_vida = $puntos_vida;
            $this->clan = $clan;
            $this->fuerza_extra = $fuerza_extra;

            $this->base_datos = new BD;
        }

        public function __toString(){
            return $this->id . " " . $this->nombre . " " . $this->nivel . " " . $this->puntos_vida . " " . $this->clan . " " . $this->fuerza_extra;
        }

        public function getId(){
            return $this->id; 
        }

        public function insertar(){
            try{
                $sql = "INSERT INTO Personaje (nombre, nivel, puntos_vida) VALUES (?,?,?)";
                $parametros = [$this->nombre, $this->nivel, $this->puntos_vida];

                $this->id = $this->base_datos->insertar($sql, $parametros);


                $sql = "INSERT INTO Orco (id_personaje, id_orco, clan, fuerza_extra) VALUES (?,?,?,?)";
                $parametros = [$this->id, $this->id, $this->clan, $this->fuerza_extra];

                $this->base_datos->insertar($sql, $parametros);
                
            
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Insertar modelo/orco.php en insertar(). Error: ".$e. "<br>";
            }
        }
    }