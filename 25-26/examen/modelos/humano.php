<?php 
    
    require_once('./servicios/bd.php');

    class humano{
        private $id;
        private $nombre;
        private $nivel;
        private $puntos_vida;
        private $profesion;
        private $reino;

        private $base_datos;

        public function __construct($nombre, $nivel, $puntos_vida, $profesion, $reino) {
            $this->id = null;
            $this->nombre = $nombre;
            $this->nivel = $nivel;
            $this->puntos_vida = $puntos_vida;
            $this->profesion = $profesion;
            $this->reino = $reino;

            $this->base_datos = new BD;
        }

        public function __toString(){
            return $this->id . " " . $this->nombre . " " . $this->nivel . " " . $this->puntos_vida . " " . $this->profesion . " " . $this->reino;
        }

        public function getId(){
            return $this->id; 
        }

        public function insertar(){
            try{
                $sql = "INSERT INTO Personaje (nombre, nivel, puntos_vida) VALUES (?,?,?)";
                $parametros = [$this->nombre, $this->nivel, $this->puntos_vida];

                $this->id = $this->base_datos->insertar($sql, $parametros);


                $sql = "INSERT INTO Humano (id_personaje, id_humano, profesion, reino) VALUES (?,?,?,?)";
                $parametros = [$this->id, $this->id, $this->profesion, $this->reino];

                $this->base_datos->insertar($sql, $parametros);
                
            
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Insertar modelo/tarea.php en guardar(). Error: ".$e. "<br>";
            }
        }
    }