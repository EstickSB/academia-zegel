<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Tablas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

<div class="container-fluid">
  <div class="row min-vh-100">
    <div class="col-md-2 bg-dark text-white p-3">
      <h4 class="mb-4">Dashboard</h4>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-house-door me-2"></i>Inicio</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i>Estudiantes</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-book me-2"></i>Cursos</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-bar-chart me-2"></i>Reportes</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link text-white"><i class="bi bi-gear me-2"></i>Configuración</a></li>
      </ul>
    </div>
    <div class="col-md-10 bg-light">
      <nav class="navbar navbar-light bg-white shadow-sm px-3 mb-4">
        <span class="navbar-brand mb-0 h5">Gestión de Datos</span>
        <div class="d-flex align-items-center">
          <span class="me-3">Admin</span>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Estudiantes</h5>
            <button class="btn btn-primary btn-sm">+ Nuevo</button>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Curso</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Ana López</td>
                  <td>ana@email.com</td>
                  <td>555-0101</td>
                  <td>Matemáticas</td>
                  <td><span class="badge bg-success">Activo</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pedro Ruiz</td>
                  <td>pedro@email.com</td>
                  <td>555-0102</td>
                  <td>Ciencias</td>
                  <td><span class="badge bg-success">Activo</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>María Díaz</td>
                  <td>maria@email.com</td>
                  <td>555-0103</td>
                  <td>Idiomas</td>
                  <td><span class="badge bg-warning">Pendiente</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Carlos Gil</td>
                  <td>carlos@email.com</td>
                  <td>555-0104</td>
                  <td>Matemáticas</td>
                  <td><span class="badge bg-danger">Inactivo</span></td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Cursos</h5>
            <button class="btn btn-primary btn-sm">+ Nuevo</button>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Profesor</th>
                  <th>Horario</th>
                  <th>Estudiantes</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Matemáticas</td>
                  <td>Juan Pérez</td>
                  <td>Lun-Mie 10am</td>
                  <td>25</td>
                  <td>$150</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ciencias</td>
                  <td>María García</td>
                  <td>Mar-Jue 2pm</td>
                  <td>18</td>
                  <td>$180</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Idiomas</td>
                  <td>Carlos López</td>
                  <td>Vie 8am-12pm</td>
                  <td>30</td>
                  <td>$200</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Profesores</h5>
            <button class="btn btn-primary btn-sm">+ Nuevo</button>
          </div>
          <div class="card-body">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Especialidad</th>
                  <th>Teléfono</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Juan Pérez</td>
                  <td>juan@email.com</td>
                  <td>Matemáticas</td>
                  <td>555-0201</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>María García</td>
                  <td>maria.g@email.com</td>
                  <td>Ciencias</td>
                  <td>555-0202</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Carlos López</td>
                  <td>carlos.l@email.com</td>
                  <td>Idiomas</td>
                  <td>555-0203</td>
                  <td>
                    <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>