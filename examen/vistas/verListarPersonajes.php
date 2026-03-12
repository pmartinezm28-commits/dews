<?php
    class verListarPersonajes{
        private $config;
        private $personajes;

        public function __construct($config, $personajes) {
            $this->config = $config;
            $this->personajes = $personajes;
        }


        public function mostrar($mensaje){
            require_once($this->config['dir_html'].'verListarPersonaje.html');
        }

    }