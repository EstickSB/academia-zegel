<?php
    require_once("../../view/plantilla/encabezado.php");
    require_once("../../model/modelestudiante.php");
    
    $accion = "insertar";
    $alumno = [
        "dni_alumno" => "",
        "nombre_alumno" => "",
        "direccion" => "",
        "telefono" => "",
        "email" => "",
        "observacion" => ""
    ];

    if (isset($_GET["dni"])) {
        $accion = "editar";
        $consultas = new Cons_estudiantes();
        $filas = $consultas->obtener_alumno($_GET["dni"]);
        if ($filas != null) {
            $alumno = $filas[0];
        }
    }
?>

<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0"><?php echo $accion == "insertar" ? "Nuevo Alumno" : "Editar Alumno"; ?></h4>
    </div>
    <div class="card-body">
        <form action="../../controller/controllerestudiante/guardar.php" method="POST">
            <input type="hidden" name="accion" value="<?php echo $accion; ?>">
            
            <div class="mb-3">
                <label for="txtdni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="txtdni" name="txtdni" value="<?php echo ($alumno['dni_alumno']); ?>" required <?php echo $accion == "editar" ? "readonly" : ""; ?>>
            </div>
            
            <div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="<?php echo ($alumno['nombre_alumno']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="txtdireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" value="<?php echo ($alumno['direccion']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txttelefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="txttelefono" name="txttelefono" value="<?php echo ($alumno['telefono']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txtemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="txtemail" name="txtemail" value="<?php echo ($alumno['email']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txtobservacion" class="form-label">Observación</label>
                <textarea class="form-control" id="txtobservacion" name="txtobservacion" rows="3"><?php echo ($alumno['observacion']); ?></textarea>
            </div>
            
            <button type="submit" class="btn btn-success"><i class="bi bi-save me-2"></i>Guardar</button>
            <a href="listado.php" class="btn btn-secondary"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
        </form>
    </div>
</div>


