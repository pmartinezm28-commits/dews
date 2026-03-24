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

        public function listarDiv(personaje $personaje): string{
            $html = '<div>';
            $html .= "<p>" . $personaje;
            $html .= '<a href = "?controlador=controladorPersonaje&metodo=Borrar&'.$personaje->getId(). '"> Borrar </a>';
            $html .= "</p>";
            $html .= '</div>'; 
            return $html; 
        }
    }