<?php
/**Modelo 
 *   Responsabilidad
 *      Representar los datos del negocio 
 *      Gestionar la persistencia
 * 
 */


class Modelo1{
    public function guardar($datos){
        echo 'Guardando '.$datos;
        throw new Exception('NO hay BD');
    }
}