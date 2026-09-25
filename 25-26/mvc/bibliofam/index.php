<?php

/**
 * index.php
 * Responsabilidades:
 *      - Cargar la configuración
 *      - Middleware
 *      - Procesar la petición
 */

try {
    $config = require_once('config.php');
    if ($config['debug']) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    } else {
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    }


    // Procesar la peticion

    $controlador = $_GET['controlador'];
    $metodo = $_GET['metodo'];

    require_once($config['dir_controladores'] . strtolower($controlador) . '.php');
    $controlador = new $controlador($config);
    $controlador->$metodo();

    die();
} catch (Throwable $excepcion) {
    header('HTTP/1.1 500 Internal Server Error');
    if ($config['debug']) {
        echo 'Error en index.php ' . $excepcion . "<br>";
    }
}
