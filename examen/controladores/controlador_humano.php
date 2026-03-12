<?php
    class controlador_humano{
        private $config;
    
        public function __construct($config){
            $this->config = $config;

        }
        public function verInsertarHumano(){
            require_once($this->config['dir_vistas'].'verInsertarHumano.php');
            $vista = new verInsertarHumano($this->config);
            $vista->mostrar();
        }

         public function insertar(){
            try{
                $nombre = $_POST['nombre'];
                $nivel = $_POST['nivel'];
                $puntos_vida = $_POST['puntos_vida'];
                $profesion = $_POST['profesion'];
                $reino = $_POST['reino'];

                // Validamos el nombre
                if(strlen(htmlspecialchars($nombre)) < 3){
                    echo'titulo no valido';
                    die();
                }

                // Es un número
                if(!is_numeric(htmlspecialchars($nivel)) > 0){
                    echo'Nivel no valida';
                    die();
                }


                if(!is_numeric(htmlspecialchars($puntos_vida)) > 0){
                    echo'Puntos de vida no valido';
                    die();
                }

                // Validamos el nombre
                if(strlen(htmlspecialchars($profesion)) < 3){
                    echo'titulo no valido';
                    die();
                }

                // Validamos el nombre
                if(strlen(htmlspecialchars($reino)) < 3){
                    echo'titulo no valido';
                    die();
                }


                require_once($this->config['dir_modelos'].'humano.php');

                $humano = new humano($nombre, $nivel, $puntos_vida, $profesion, $reino);

                $humano->insertar();

                $mensaje = "Se ha insertado el humano en la base de datos";
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
    }