<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:../../view/viewacceso/login.php");
    exit();
}

require_once("../../model/modelestudiante.php");

if(isset($_GET["dni"])){
    $dni = $_GET["dni"];
    $modelo = new Cons_estudiantes();
    $modelo->eliminar_alumno($dni);
}

header("location:../../view/viewestudiantes/listado.php");
?>
