<?php
    class verInsertarElfo{
        private $config;

        public function __construct($config) {
            $this->config = $config;
        }

        public function mostrar() {
            require_once($this->config['dir_html'].'verInsertarElfo.html');
            die();
        }
    }