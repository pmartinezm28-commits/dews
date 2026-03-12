<?php 
    
    require_once('./servicios/bd.php');

    class elfo{
        private $id;
        private $nombre;
        private $nivel;
        private $puntos_vida;
        private $tipo;
        private $habiliad_especial;

        private $base_datos;

        public function __construct($nombre, $nivel, $puntos_vida, $tipo, $habiliad_especial) {
            $this->id = null;
            $this->nombre = $nombre;
            $this->nivel = $nivel;
            $this->puntos_vida = $puntos_vida;
            $this->tipo = $tipo;
            $this->habiliad_especial = $habiliad_especial;

            $this->base_datos = new BD;
        }

        public function __toString(){
            return $this->id . " " . $this->nombre . " " . $this->nivel . " " . $this->puntos_vida . " " . $this->tipo . " " . $this->habiliad_especial;
        }

        public function getId(){
            return $this->id; 
        }

        public function insertar(){
            try{
                $sql = "INSERT INTO Personaje (nombre, nivel, puntos_vida) VALUES (?,?,?)";
                $parametros = [$this->nombre, $this->nivel, $this->puntos_vida];

                $this->id = $this->base_datos->insertar($sql, $parametros);


                $sql = "INSERT INTO Elfo (id_personaje, id_elfo, tipo, habilidad_especial) VALUES (?,?,?,?)";
                $parametros = [$this->id, $this->id, $this->tipo, $this->habiliad_especial];

                $this->base_datos->insertar($sql, $parametros);
                
            
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Insertar modelo/elfo.php en insertar(). Error: ".$e. "<br>";
            }
        }
    }