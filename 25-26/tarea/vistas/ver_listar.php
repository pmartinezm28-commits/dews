<?php 


    class verListar{
        private $config;
        private $tareas;

        public function __construct($config, $tareas) {
            $this->config = $config;
            $this->tareas = $tareas;
        }


        public function mostrar($mensaje){
            require_once($this->config['dir_html'].'ver_listar.html');
        }

        public function listarDiv(Tarea $tarea){
            $cad = "<div>";
            $cad .=  "<p>" . $tarea . "  ";
            $cad .= "<a href=?controlador=controlador_tarea&metodo=borrar&id=" . $tarea->getId() . ">Borrar</a>" . " ";
            $cad .= "<a href=?controlador=controlador_tarea&metodo=verModificar&id=" . $tarea->getId() . ">Modificar</a>";
            $cad .= "</p>";
            $cad .= "</div>";
            return $cad;
        }
    }