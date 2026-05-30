<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../../view/viewacceso/login.php");
    exit();
}

require_once("../../model/modelestudiante.php");

$dni = $_POST["txtdni"];
$nombre = $_POST["txtnombre"];
$direccion = $_POST["txtdireccion"];
$telefono = $_POST["txttelefono"];
$email = $_POST["txtemail"];
$observacion = $_POST["txtobservacion"];
$accion = $_POST["accion"]; // 'insertar' o 'editar'

$modelo = new Cons_estudiantes();

if ($accion == "insertar") {
    $modelo->insertar_alumno($dni, $nombre, $direccion, $telefono, $email, $observacion);
} else if ($accion == "editar") {
    $modelo->actualizar_alumno($dni, $nombre, $direccion, $telefono, $email, $observacion);
}

header("location:../../view/viewestudiantes/listado.php");
?>
