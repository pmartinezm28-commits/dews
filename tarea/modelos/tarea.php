<?php 

    require_once('./servicios/bd.php');
    class Tarea{
        private $id;
        private $titulo;
        private $prioridad;
        private $fecha;
        private $base_datos;

        public function __construct($titulo, $prioridad, $fecha) {
            $this->id = null;
            $this->titulo = $titulo;
            $this->prioridad = $prioridad;
            $this->fecha = $fecha;
            $this->base_datos = new BD;
        }

        public function __toString(){
            return $this->id . " " . $this->titulo . " " . $this->prioridad . " " . $this->fecha;
        }

        public function getId(){
            return $this->id; 
        }
        
        // Crea la query para guardar una nueva tarea
        public function guardar(){
            try{
                $sql = "INSERT INTO tarea (titulo, prioridad, fecha) VALUES (?,?,?)";
                $parametros = [$this->titulo, $this->prioridad, $this->fecha];

                $this->base_datos->insertar($sql, $parametros);
            
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Insertar modelo/tarea.php en guardar(). Error: ".$e. "<br>";
            }
        } 

        // Devuelve todas las tareas en la tabla tarea
        public static function listar(){
            try{
                $sql = "SELECT tarea.id, tarea.titulo, tarea.prioridad, tarea.fecha
                        FROM tarea
                        ORDER BY tarea.titulo asc";
                $bd = new bd;
                $tuplas = $bd->buscar($sql, null);

                $tareas = [];
                foreach($tuplas as $tupla){
                    $tarea = new Tarea( $tupla['titulo'], $tupla['prioridad'], $tupla['fecha']);
                    $tarea->id = $tupla['id'];
                    array_push($tareas, $tarea);
                }

                return $tareas;


            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Listar en modelo/tarea.php en listar(). Error: ".$e. "<br>";
            }
        }

        public static function borrar($id){
            try{
                $sql = "DELETE FROM tarea
                        WHERE tarea.id = $id";
                $bd = new bd;  
                $bd -> borrar($sql, null);
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Borrar en modelo/tarea.php en borrar. Error: ".$e. "<br>";
            }
        }

        public static function verModificar($id){
            try{
                $sql = "SELECT tarea.titulo, tarea.prioridad, tarea.fecha
                        FROM tarea
                        WHERE tarea.id = $id";
                $bd = new BD;
                $tarea = $bd -> seleccionar($sql, null); 
                // TODO echo
                return $tarea;
                
            }catch(Throwable $e){
                header("HTTP/2 500 Internal Server Error");
                echo "Error: Modifcar en modelo/tarea.php en borrar. Error: ".$e. "<br>";
            }
        }

        // Meter por parametros la tarea para poder modificar todos los campos
        public static function modificar(){
            try{
                $sql = "UPDATE tarea
                        SET tarea.titulo = ";
            }catch(Throwable $e){

            }
        }
    }