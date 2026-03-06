<?php
    /**
     * 
     */
    class AutorListar{
        private $config;
        private $autores;

        public function __construct($config, $autores){
            $this->config = $config;
            $this->autores = $autores;
        }

        public function mostrar($mensaje = null){
            require_once($this->config['dir_html'].'autor_listar.html');
        }

         public function verDiv(Autor $autor): string{
            $html = '<div>';
            $html .= '<p> <a href = "?controlador=controladorAutor&metodo=consultar&'.$autor->getId().'">';
            $html .= $autor  .'</p>';
            $html .= '</div>'; 
            return $html; 
        }
    }