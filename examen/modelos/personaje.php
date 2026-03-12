<?php 
    
    require_once('./servicios/bd.php');

    class personaje{
        private $id;
        private $nombre;
        private $nivel;
        private $puntos_vida;

        public function __construct($nombre, $nivel, $puntos_vida) {
            $this->id = null;
            $this->nombre = $nombre;
            $this->nivel = $nivel;
            $this->puntos_vida = $puntos_vida;
        }

         public static function listar(){
            try{
                $sql = "SELECT personaje.id, personaje.nombre, personaje.nivel, personaje.puntos_vida
                        FROM personaje
                        ORDER BY personaje.nombre asc";
                $bd = new bd;
                $tuplas = $bd->buscar($sql, null);

                $personajes = [];
                foreach($tuplas as $tupla){
                    $tarea = new personaje( $tupla['nombre'], $tupla['nivel'], $tupla['puntos_vida']);
                    $tarea->id = $tupla['id'];
                    array_push($personajes, $tarea);
                }

                return $personajes;


            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Listar en modelo/personaje.php en listar(). Error: ".$e. "<br>";
            }
        }
    }