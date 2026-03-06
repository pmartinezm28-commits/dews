<?php
    /** Controlador
     *      Responsabilidad:
     *      - Recibir los datos de ususario
     *      - Aplicar regla de negocio
     *      - Navegación 
     *      
     */



class ControladorAutor{
     private $config;

     public function __construct($config){
          $this->config = $config;
 
     }
     
     public function verAlta($mensaje = null){
          require_once($this->config['dir_vistas'].'autorVerAlta.php');
          $vista = new AutorVerAlta($this->config);
          $vista->mostrar($mensaje);
     }

     public function alta(){
          try{ 
               $nombre = $_POST['nombre'];
               $fecha_nacimiento = $_POST['fecha_nacimiento'];
               $fecha_muerte = $_POST['fecha_muerte'];
               $nacionalidad = $_POST['nacionalidad'];

               // TODO: Sanitizar y validar
               if($fecha_muerte == ''){
                    $fecha_muerte == null;
               }

               require_once($this->config['dir_modelos'].'autor.php');
              
               $autor = new Autor($nombre, $fecha_nacimiento, $fecha_muerte, $nacionalidad);
               $id = $autor->guardar();
               
               $mensaje = "El alta del autor ($id) se realizó correctamente";
               $this->verAlta($mensaje);

          }catch(Throwable $e){
               header('HTTP/2 500 Internal Server Error');
               if($this->config['debug']){
                    echo 'Codigo Error: controlador/controladorAutor '. $e . "<br>";
               }
               die();
          }

     }
     public function listar(){
          require_once($this->config['dir_modelos'].'autor.php');
          $autores = Autor::listar();
          require_once($this->config['dir_vistas'].'autorListar.php');  
          $vista = new AutorListar($this->config, $autores);
          $vista->mostrar();
     }

} 