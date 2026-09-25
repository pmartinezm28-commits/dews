<?php
    class controlador_elfo{
        private $config;
    
        public function __construct($config){
            $this->config = $config;

        }
        public function verInsertarElfo(){
            require_once($this->config['dir_vistas'].'verInsertarElfo.php');
            $vista = new verInsertarElfo($this->config);
            $vista->mostrar();
        }

         public function insertar(){
            try{
                $nombre = $_POST['nombre'];
                $nivel = $_POST['nivel'];
                $puntos_vida = $_POST['puntos_vida'];
                $tipo = $_POST['tipo'];
                $habilidad_especial = $_POST['habilidad_especial'];

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
                if(strlen(htmlspecialchars($tipo)) < 3){
                    echo'Tipo no valido';
                    die();
                }

                // Validamos el nombre
                if(strlen(htmlspecialchars($habilidad_especial)) < 3){
                    echo'Habilidad no valido';
                    die();
                }


                require_once($this->config['dir_modelos'].'elfo.php');

                $elfo = new elfo($nombre, $nivel, $puntos_vida, $tipo, $habilidad_especial);

                $elfo->insertar();

                $mensaje = "Se ha insertado el humano en la base de datos";
                require_once($this->config['dir_controladores'].'controlador_principal.php');
                $controlador_principal = new controlador_principal($this->config);
                $controlador_principal->verMenuPpal($mensaje);
           
            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_elfo en insertar'. $e . "<br>";
                }
                die();
            }

        }
    }