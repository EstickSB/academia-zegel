<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Zegel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container"> <a class="navbar-brand fw-bold" href="#"> Zegel </a> <button class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#menu"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> <a class="nav-link" href="#quienesSomos"> Quiénes Somos </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#galeria"> Galería </a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#cursos"> Cursos </a> </li>
                    <li class="nav-item ms-2"> <a class="btn btn-login" href="#login"> Iniciar Sesión </a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"> <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100">
            </div>
            <div class="carousel-item"> <img src="https://picsum.photos/1200/500?random=2" class="d-block w-100"> </div>
            <div class="carousel-item"> <img src="https://picsum.photos/1200/500?random=3" class="d-block w-100"> </div>
        </div> <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
            data-bs-slide="prev"> <span class="carousel-control-prev-icon"></span> </button> <button
            class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next"> <span
                class="carousel-control-next-icon"></span> </button>
    </div>
    <section id="quienesSomos">
        <div class="container">
            <h2 class="titulo"> Quiénes Somos </h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card info-card p-4 h-100">
                        <h3> Misión </h3>
                        <p> Brindar formación profesional moderna y práctica mediante programas educativos innovadores
                            orientados al mundo laboral actual. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card info-card p-4 h-100">
                        <h3> Visión </h3>
                        <p> Ser una academia líder en educación profesional y tecnológica reconocida por la calidad de
                            sus estudiantes y docentes. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeria">
        <div class="container">
            <h2 class="titulo"> Galería </h2>
            <div class="row g-4 gallery"> <?php for($i = 1; $i <= 9; $i++){ ?> <div class="col-md-4"> <img
                        src="https://picsum.photos/400/300?random=<?php echo $i + 20; ?>"> </div> <?php } ?> </div>
        </div>
    </section>
    <section id="cursos">
        <div class="container">
            <h2 class="titulo"> Cursos Profesionales </h2>
            <div class="row g-4">
                <?php $cursos = [ ["Ingeniería", "Desarrollo en Python"], ["Ingeniería", "Inteligencia Artificial"], ["Medicina", "Atención de Pacientes UCI"], ["Medicina", "Primeros Auxilios"], ["Marketing", "Marketing Digital"], ["Marketing", "Publicidad en Redes Sociales"], ["Administración", "Gestión Empresarial"], ["Diseño", "Diseño UX/UI"] ]; foreach($cursos as $curso){ ?>
                <div class="col-md-3">
                    <div class="card curso-card h-100">
                        <div class="card-body"> <span class="badge bg-dark mb-3"> <?php echo $curso[0]; ?> </span>
                            <h5 class="card-title"> <?php echo $curso[1]; ?> </h5>
                            <p class="card-text"> Curso profesional orientado al desarrollo de habilidades prácticas y
                                laborales. </p>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>
        </div>
    </section>
    <section id="login" class="login-section">
        <div class="container">
            <h2 class="titulo"> Iniciar Sesión </h2>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="login-box">
                        <form method="POST" action="dashboard.php">
                            <div class="mb-3"> <label class="form-label"> Correo Electrónico </label> <input
                                    type="email" name="correo" class="form-control" required> </div>
                            <div class="mb-3"> <label class="form-label"> Contraseña </label> <input type="password"
                                    name="password" class="form-control" required> </div> <button type="submit"
                                class="btn btn-dark w-100"> Ingresar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p class="mb-0"> © 2026 Academia Zegel - Todos los derechos reservados </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>