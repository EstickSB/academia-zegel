<?php
	class Conexion{
		public function get_conexion()
		{
			$servidor="localhost";
			$usuario="root";
			$clave="";
			$basedatos="zegeldb"; 
   
			try {
				$conexion=new PDO("mysql:host=$servidor;dbname=$basedatos;charset=UTF8",$usuario,$clave);
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conexion;
			} catch(PDOException $e) {
				echo "Error de conexión: " . $e->getMessage();
				return null;
			}
		}
		
		public function get_desconexion()
		{
			$conexion=null;
			return $conexion;
		}
	}
?>
