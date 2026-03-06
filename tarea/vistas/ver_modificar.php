<?php

class ver_modificar{
    private $config;
    private $tarea;
    private $id;


    public function __construct($config, $tarea, $id) {
        $this->config = $config;
        $this->tarea = $tarea;
        $this->id = $id;
    }

    public function mostrar(){
        require_once($this->config['dir_html'].'ver_modificar.html');
    }

}