<!-- SIDEBAR & HEADER INCLUIDO PARA OTRAS VISTAS -->
<?php
	@session_start();
	if(!isset($_SESSION["user"]))
	{
		header("location:../../view/viewacceso/login.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academia Zegel - Gestión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container-fluid">
  <div class="row min-vh-100">
    <!-- SIDEBAR -->
    <div class="col-md-2 bg-dark text-white p-3">
      <h4 class="mb-4">Academia Zegel</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="../../view/plantilla/menu.php" class="nav-link text-white">
                <i class="bi bi-house-door me-2"></i>Inicio
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="../../view/viewestudiantes/listado.php" class="nav-link text-white">
                <i class="bi bi-people me-2"></i>Estudiantes
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="../../view/viewprofesores/listado.php" class="nav-link text-white">
                <i class="bi bi-bar-chart me-2"></i>Profesores
            </a>
        </li>
        <li class="nav-item mt-5">
            <a href="../../controller/controlleracceso/logout.php" class="nav-link text-danger">
                <i class="bi bi-box-arrow-left me-2"></i>Cerrar Sesión
            </a>
        </li>
      </ul>
    </div>
    <!-- CONTENIDO PRINCIPAL -->
    <div class="col-md-10 bg-light">
      <!-- HEADER -->
      <nav class="navbar navbar-light bg-white shadow-sm px-3 mb-4">
        <span class="navbar-brand mb-0 h5">Gestión de Datos</span>
        <div class="d-flex align-items-center">
          <span class="me-3"><?php echo($_SESSION["user"]); ?></span>
          <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Avatar">
        </div>
      </nav>
      <div class="container">
      <?php if(isset($_GET['mens'])): ?>
          <div class="alert alert-info"><?php echo($_GET['mens']); ?></div>
      <?php endif; ?>
