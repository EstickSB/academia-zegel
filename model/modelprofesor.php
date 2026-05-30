<?php
	require_once("conexionbd.php");
	class Cons_profesores
	{
		public function listar_profesores()
		{
			$filas=null;
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="SELECT * FROM profesor;";
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

		public function insertar_profesor($dni_profesor, $nombre_profesor, $direccion, $ruc, $telefono, $email)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="INSERT INTO profesor(dni_profesor, nombre_profesor, direccion, ruc, telefono, email) VALUES('$dni_profesor', '$nombre_profesor', '$direccion', '$ruc', '$telefono', '$email');";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al guardar el profesor.";
			}
			else
			{
				$sentencia->execute();
				return "Profesor guardado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}

		public function obtener_profesor($dni_profesor)
		{
			$filas=null;
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="SELECT * FROM profesor WHERE dni_profesor='$dni_profesor';";
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

		public function actualizar_profesor($dni_profesor, $nombre_profesor, $direccion, $ruc, $telefono, $email)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="UPDATE profesor SET nombre_profesor='$nombre_profesor', direccion='$direccion', ruc='$ruc', telefono='$telefono', email='$email' WHERE dni_profesor='$dni_profesor';";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al actualizar el profesor.";
			}
			else
			{
				$sentencia->execute();
				return "Profesor actualizado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}

		public function eliminar_profesor($dni_profesor)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="DELETE FROM profesor WHERE dni_profesor='$dni_profesor';";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al eliminar el profesor.";
			}
			else
			{
				$sentencia->execute();
				return "Profesor eliminado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}
	}
?>
