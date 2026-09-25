<?php
/**
	Para configurar el acceso a SQL en XAMPP: Edita el fichero xampp/php/php.ini, descomenta la línea ;extension=sqlite3 (quitando el ;), salva el fichero y reinicia el servidor de XAMPP.
	Además, asegúrate de que hay permisos de escritura en el directorio de la base de datos para todos los usuarios y que hay permisos de escritura sobre el fichero de base de datos para cualquier usuario.
**/

// SQLite $pdo_sqlite = new PDO("sqlite:/path/to/database.sqlite");
	/**
	 * 
	 * */
	class PDO_SQLite{
		private $conexion;

		public function __construct($path_bd){
			try{
            	$config = require('config.php');    
				$this->conexion = new SQLite3("sqlite:".$path_bd);
			}
			catch(Throwable $e){
				header ('HTTP/2 500 Internal Server Error');
	            if($config['debug']){
	                echo "Error en servicios/pdo.php: " .$e . "<br>";
	            }
			}
		}

		/**
		 * Devuelve un array asociativo de alumno y su calificación
		 * 
		 * */
		public function listar(string $tabla, array $campos){
			try{

            	$config = require('config.php'); 
				require_once($config["path_bd"]);
				$pdo = new PDO_SQLite("");
				$sql = "SELECT id, nombre, calificacion 
						FROM calificacion
						ORDER BY nombre ASC";
				
				$sentencia = $this->conexion->prepare($tabla);
				$sentencia->execute($campos);
				return $sentencia->fetch(PDO::FETCH_ASSOC);
			}
			catch(Throwable $e){
				header ('HTTP/2 500 Internal Server Error');
	            if($config['debug']){
	                echo "Error en servicios/pdo.php: " .$e . "<br>";
	            }

			}
		}


		/**
		 * Inserta datos en la base de datos, en la tabla calificacion
		 * 
		 * */
		public function insertar(string $tabla, array $campos, array $valores){
			try{

            	$config = require('config.php'); 
				require_once($config["path_bd"]);
				$pdo = new PDO_SQLite("");
				$sql = "INSERT INTO calificacion (nombre, calificacion) VALUES (?, ?)";
				
				$sentencia = $this->conexion->prepare($tabla);
				$sentencia->execute($campos);
			}
			catch(Throwable $e){
				header ('HTTP/2 500 Internal Server Error');
	            if($config['debug']){
	                echo "Error en servicios/pdo.php: " .$e . "<br>";
	            }

			}
		}

	}
