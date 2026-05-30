<?php
	require_once("conexionbd.php");
	class Cons_estudiantes
	{
		public function listar_alumnos()
		{
			$filas=null;
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="SELECT * FROM alumno;";
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

		public function insertar_alumno($dni_alumno, $nombre_alumno, $direccion, $telefono, $email, $observacion)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="INSERT INTO alumno(dni_alumno, nombre_alumno, direccion, telefono, email, observacion) VALUES('$dni_alumno', '$nombre_alumno', '$direccion', '$telefono', '$email', '$observacion');";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al guardar el alumno.";
			}
			else
			{
				$sentencia->execute();
				return "Alumno guardado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}

		public function obtener_alumno($dni_alumno)
		{
			$filas=null;
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="SELECT * FROM alumno WHERE dni_alumno='$dni_alumno';";
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

		public function actualizar_alumno($dni_alumno, $nombre_alumno, $direccion, $telefono, $email, $observacion)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="UPDATE alumno SET nombre_alumno='$nombre_alumno', direccion='$direccion', telefono='$telefono', email='$email', observacion='$observacion' WHERE dni_alumno='$dni_alumno';";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al actualizar el alumno.";
			}
			else
			{
				$sentencia->execute();
				return "Alumno actualizado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}

		public function eliminar_alumno($dni_alumno)
		{
			$model=new Conexion();
			$conexion=$model->get_conexion();
			$sql="DELETE FROM alumno WHERE dni_alumno='$dni_alumno';";
			$sentencia=$conexion->prepare($sql);
			
			if(!$sentencia)
			{
				return "Error al eliminar el alumno.";
			}
			else
			{
				$sentencia->execute();
				return "Alumno eliminado correctamente...";
			}
			$conexion=$model->get_desconexion();
		}
	}
?>
