<?php
	class ControladorCalificacion{
		private $config;
		private $modelo;
		
		public function __construct($config){
			$this->config = $config;
			require_once($this->config['path_modelos'].'calificacion.php');
			$this->modelo = new Calificacion($this->config['path_servicios'], $this->config['path_bd']);
		}

		public function listar(){
			$calificaciones = $this->modelo->listar();
			require_once($this->config['path_vistas'].'vistalistar.php');
			$vista = new VistaListar($this->config['path_html']);
			$vista->mostrar($calificaciones);
		}

		public function registrar(){
			$mensaje = "";
			$alumno = $_POST['nombre'];
			$calificacion = $_POST['calificacion'];

			//Sanitización de parámetros
			if(strlen(htmlspecialchars($alumno) < 2 || is_numeric($alumno)) ){
				$mensaje = "El nombre debe tener más de 2 carácteres";
				echo "<h3> <a href='?controlador=ControladorCalificacion&metodo=verRegistrar'>Volver a registrar</a> </h3>" ;
				die();
			}		
			else if( strlen(htmlspecialchars($calificacion)) < 1 || strlen(htmlspecialchars($calificacion)) > 10 || is_string($calificacion) ){
				$mensaje = "La calificacion debe tener valor entre 1 y 10";
				die();
			}	
			else{
				$mensaje = "El registro de la calificación se realizó con éxito";
			}

			//Validación de parámetros

			
			$this->modelo->registrar($alumno, $calificacion);
			$this->verRegistrar($mensaje);

		}

		public function verRegistrar($mensaje = null){
			require_once($this->config['path_vistas'].'vistaregistrar.php');
			$vista = new VistaRegistrar($this->config['path_html']);
			$vista->mostrar();
		}
	}
