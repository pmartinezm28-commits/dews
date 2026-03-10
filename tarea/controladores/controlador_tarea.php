<?php
    class controlador_tarea{
        private $config;
    
        public function __construct($config){
            $this->config = $config;

        }
        public function verInsertar(){
            require_once($this->config['dir_vistas'].'ver_insertar.php');
            $vista = new ver_insertar($this->config);
            $vista->mostrar();
        }

        public function verModificar() {
            $id = $_GET['id'];
            if(!is_numeric(htmlspecialchars($id)) > 0 ){
                echo'Id no valido';
                die();
            }

            require_once($this->config['dir_modelos'].'tarea.php');
            $tarea = Tarea::verModificar($id);
            
            require_once($this->config['dir_vistas'].'ver_modificar.php');
            $ver_mod = new ver_modificar($this->config, $tarea, $id);
            $ver_mod->mostrar();

        }

        // function VER_LISTAR

        public function insertar(){
            try{
                $titulo = $_POST['titulo'];
                $prioridad = $_POST['prioridad'];
                $fecha = $_POST['fecha'];

                // Validamos el nombre
                if(strlen(htmlspecialchars($titulo)) < 5){
                    echo'titulo no valido';
                    die();
                }
                // Es un número
                if(!is_numeric(htmlspecialchars($prioridad))){
                    echo'Prioridad no valida';
                    die();
                }
                // Validar el formato de la fecha
                $array_fecha = explode('-', $fecha);
                if(!checkdate($array_fecha[1], $array_fecha[2], $array_fecha[0])){
                    echo'Fecha no valida';
                    die();
                }
                // Si fecha es anterior a hoy
                $fecha_actual = date('Y-m-d');
                if($fecha_actual > $fecha){
                    echo'Fecha anterior';
                    die();
                }

                require_once($this->config['dir_modelos'].'tarea.php');

                $tarea = new Tarea($titulo, $prioridad, $fecha);

                $tarea->guardar();

                $mensaje = "Se ha insertado la tarea en la base de datos";
                require_once($this->config['dir_controladores'].'controlador_principal.php');
                $controlador_principal = new controlador_principal($this->config);
                $controlador_principal->verMenuPpal($mensaje);
           
            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_tarea en insertar'. $e . "<br>";
                }
                die();
            }

        }

        public function listar ($mensaje = null){
            try{
                require_once($this->config['dir_modelos'].'tarea.php');
                $tareas = Tarea::listar();
        
                require_once($this->config['dir_vistas'].'ver_listar.php');
                $verListar = new verListar($this->config, $tareas);
                $verListar -> mostrar($mensaje);
        
            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_tarea en listar'. $e . "<br>";
                }
                die();
            }
        }

        public function borrar(){
            try {
                $id = $_GET['id'];
            
            if(!is_numeric(htmlspecialchars($id)) > 0 ){
                echo'Id no valido';
                die();
            }

            require_once($this->config['dir_modelos'].'tarea.php');
            Tarea::borrar($id); 

            $mensaje = "Operación realizada con éxito";
            $this->listar($mensaje);
            }
            catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_tarea en borrar'. $e . "<br>";
                }
                die();
            }
        }

        public function modificar(){
            try{
                $id = $_POST['id'];
                $titulo = $_POST['titulo'];
                $prioridad = $_POST['prioridad'];
                $fecha = $_POST['fecha'];

                // Validación de id
                if(!is_numeric(htmlspecialchars($id)) > 0 ){
                    echo'Id no valido';
                    die();
                }

                // Validamos el nombre
                if(strlen(htmlspecialchars($titulo)) < 5){
                    echo'titulo no valido';
                    die();
                }
                // Es un númer;o
                if(!is_numeric(htmlspecialchars($prioridad))){
                    echo'Prioridad no valida';
                    die();
                }
                // Validar el formato de la fecha
                $array_fecha = explode('-', $fecha);
                if(!checkdate($array_fecha[1], $array_fecha[2], $array_fecha[0])){
                    echo'Fecha no valida';
                    die();
                }
                // Si fecha es anterior a hoy
                $fecha_actual = date('Y-m-d');
                if($fecha_actual > $fecha){
                    echo'Fecha anterior';
                    die();
                }
            require_once($this->config['dir_modelos'].'tarea.php');    
            Tarea::modificar($id, $titulo, $prioridad, $fecha);

            $mensaje = "La modificación se ha realizado correctamente";
            $this->listar($mensaje);

            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_tarea en modificar'. $e . "<br>";
                }
                die();
            } 
        }
    }