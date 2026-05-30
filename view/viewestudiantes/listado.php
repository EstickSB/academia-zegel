<?php
    require_once("../../view/plantilla/encabezado.php");
    require_once("../../model/modelestudiante.php");
    $consultas = new Cons_estudiantes();
    $alumnos = $consultas->listar_alumnos();
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Gestión de Alumnos</h4>
        <a href="formulario.php" class="btn btn-light btn-sm"><i class="bi bi-plus-circle me-1"></i>Nuevo Alumno</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Observación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($alumnos): ?>
                        <?php foreach($alumnos as $a): ?>
                        <tr>
                            <td><?php echo ($a['dni_alumno']); ?></td>
                            <td><?php echo ($a['nombre_alumno']); ?></td>
                            <td><?php echo ($a['direccion']); ?></td>
                            <td><?php echo ($a['telefono']); ?></td>
                            <td><?php echo ($a['email']); ?></td>
                            <td><?php echo ($a['observacion']); ?></td>
                            <td>
                                <a href="formulario.php?dni=<?php echo urlencode($a['dni_alumno']); ?>" class="btn btn-sm btn-warning" title="Editar"><i class="bi bi-pencil"></i></a>
                                <a href="../../controller/controllerestudiante/eliminar.php?dni=<?php echo urlencode($a['dni_alumno']); ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Está seguro de eliminar este alumno?');"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7" class="text-center">No hay alumnos registrados</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

