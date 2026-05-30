<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../../view/viewacceso/login.php");
    exit();
}

require_once("../../model/modelprofesor.php");

if(isset($_GET["dni"])){
    $dni = $_GET["dni"];
    $modelo = new Cons_profesores();
    $modelo->eliminar_profesor($dni);
}

header("location:../../view/viewprofesores/listado.php");
?>
