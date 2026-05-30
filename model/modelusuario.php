<?php
	require_once("conexionbd.php");
	
	class Cons_usuarios
	{
		public function buscar_usuario($arg_usuario)
		{
			$filas=null;
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="SELECT * FROM usuario WHERE username = '$arg_usuario';";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return null;
			}
			else
			{
				$sentencia->execute();
				while($resultado=$sentencia->fetch())
				{
					$filas[]=$resultado;
				}
				return $filas;
			}
			$conexion=$model->get_desconexion();	
		}
	}
?>
