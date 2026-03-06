<?php

class controlador_principal{
    private $config;
    
    public function __construct($config){
        $this->config = $config;

    }
    public function verMenuPpal($mensaje = null) {
        require_once($this->config['dir_vistas'].'menu_ppal.php');
        $vista = new menuPpal($this->config);
        $vista->mostrar($mensaje);
    }
}