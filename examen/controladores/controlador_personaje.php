<?php
    class controlador_personaje{
        private $config;
    
        public function __construct($config){
            $this->config = $config;

        }
        public function listar ($mensaje = null){
            try{
                require_once($this->config['dir_modelos'].'personaje.php');
                $personajes = personaje::listar();
        
                require_once($this->config['dir_vistas'].'verListarPersonajes.php');
                $verListar = new verListarPersonajes($this->config, $personajes);
                $verListar -> mostrar($mensaje);
        
            }catch(Throwable $e){
                header('HTTP/2 500 Internal Server Error');
                if($this->config['debug']){
                        echo 'Codigo Error: controlador/controlador_tarea en listar'. $e . "<br>";
                }
                die();
            }
        }
    }