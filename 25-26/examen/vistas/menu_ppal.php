<?php

class menuPpal{
    private $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function mostrar($mensaje) {
        require_once($this->config['dir_html'].'menu_ppal.html');
        die();
    }
}