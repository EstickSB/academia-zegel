<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../../view/viewacceso/login.php");
    exit();
}

require_once("../../model/modelprofesor.php");

$dni = $_POST["txtdni"];
$nombre = $_POST["txtnombre"];
$direccion = $_POST["txtdireccion"];
$ruc = $_POST["txtruc"];
$telefono = $_POST["txttelefono"];
$email = $_POST["txtemail"];
$accion = $_POST["accion"]; // 'insertar' o 'editar'

$modelo = new Cons_profesores();

if ($accion == "insertar") {
    $modelo->insertar_profesor($dni, $nombre, $direccion, $ruc, $telefono, $email);
} else if ($accion == "editar") {
    $modelo->actualizar_profesor($dni, $nombre, $direccion, $ruc, $telefono, $email);
}

header("location:../../view/viewprofesores/listado.php");
?>
