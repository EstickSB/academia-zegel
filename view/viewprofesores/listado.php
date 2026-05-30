<?php
    require_once("../../view/plantilla/encabezado.php");
    require_once("../../model/modelprofesor.php");
    $consultas = new Cons_profesores();
    $profesores = $consultas->listar_profesores();
?>

<div class="card shadow">
    <div class="card-header bg-warning d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Gestión de Profesores</h4>
        <a href="formulario.php" class="btn btn-dark btn-sm"><i class="bi bi-plus-circle me-1"></i>Nuevo Profesor</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>RUC</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($profesores): ?>
                        <?php foreach($profesores as $p): ?>
                        <tr>
                            <td><?php echo ($p['dni_profesor']); ?></td>
                            <td><?php echo ($p['nombre_profesor']); ?></td>
                            <td><?php echo ($p['direccion']); ?></td>
                            <td><?php echo ($p['ruc']); ?></td>
                            <td><?php echo ($p['telefono']); ?></td>
                            <td><?php echo ($p['email']); ?></td>
                            <td>
                                <a href="formulario.php?dni=<?php echo urlencode($p['dni_profesor']); ?>" class="btn btn-sm btn-warning" title="Editar"><i class="bi bi-pencil"></i></a>
                                <a href="../../controller/controllerprofesor/eliminar.php?dni=<?php echo urlencode($p['dni_profesor']); ?>" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Está seguro de eliminar este profesor?');"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7" class="text-center">No hay profesores registrados</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
