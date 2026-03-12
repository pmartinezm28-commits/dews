<?php
    class controlador_orco{
        private $config;
    
        public function __construct($config){
            $this->config = $config;

        }
        public function verInsertarOrco(){
            require_once($this->config['dir_vistas'].'verInsertarOrco.php');
            $vista = new verInsertarOrco($this->config);
            $vista->mostrar();
        }

        public function insertar(){
            try{
                $nombre = $_POST['nombre'];
                $nivel = $_POST['nivel'];
                $puntos_vida = $_POST['puntos_vida'];
                $clan = $_POST['clan'];
                $fuerza_extra = $_POST['fuerza_extra'];

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
                if(strlen(htmlspecialchars($clan)) < 3){
                    echo'Clan no valido';
                    die();
                }

                // Validamos el nombre
                if(!is_numeric(htmlspecialchars($fuerza_extra)) > 0){
                    echo'Fuerza no valido';
                    die();
                }


                require_once($this->config['dir_modelos'].'orco.php');

                $orco = new orco($nombre, $nivel, $puntos_vida, $clan, $fuerza_extra);

                $orco->insertar();

                $mensaje = "Se ha insertado el humano en la base de datos";
                require_once($this->config['dir_controladores'].'controlador_principal.php');
                $controlador_principal = new controlador_principal($this->config);
                $controlador_principal->verMenuPpal($mensaje);
           
            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_orco en insertar'. $e . "<br>";
                }
                die();
            }

        }
    }