<?php
	session_start();
	$_SESSION["user"]=null;
	$_SESSION["tipo"]=null;
	
	require_once("../../model/modelusuario.php");
	
	$usuing=$_POST["txtusuario"];
	$claing=$_POST["txtclave"];
	
	$consultas=new Cons_usuarios();
	$filas=$consultas->buscar_usuario($usuing);
	
	$usuenc = "";
	$claenc = "";
	$tipoenc = "";
	
	if($filas != null) {
		foreach ($filas as $fila) 
		{
			$usuenc=$fila["username"];
			$tipoenc=$fila["tipousuario"];
			$claenc=$fila["clave"];
		}
	}
	{
		$_SESSION["user"]=$usuenc;
		$_SESSION["tipo"]=$tipoenc;
		header("location:../../view/plantilla/menu.php");
	}
	else
	{
		$mensaje="Usuario o Clave Incorrectos...";
		header("location:../../view/viewacceso/login.php?mens=$mensaje");
	}
?>
