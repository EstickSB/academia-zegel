<?php
    require_once("../../view/plantilla/encabezado.php");
    require_once("../../model/modelprofesor.php");
    
    $accion = "insertar";
    $profesor = [
        "dni_profesor" => "",
        "nombre_profesor" => "",
        "direccion" => "",
        "ruc" => "",
        "telefono" => "",
        "email" => ""
    ];

    if (isset($_GET["dni"])) {
        $accion = "editar";
        $consultas = new Cons_profesores();
        $filas = $consultas->obtener_profesor($_GET["dni"]);
        if ($filas != null) {
            $profesor = $filas[0];
        }
    }
?>

<div class="card shadow">
    <div class="card-header bg-warning">
        <h4 class="mb-0"><?php echo $accion == "insertar" ? "Nuevo Profesor" : "Editar Profesor"; ?></h4>
    </div>
    <div class="card-body">
        <form action="../../controller/controllerprofesor/guardar.php" method="POST">
            <input type="hidden" name="accion" value="<?php echo $accion; ?>">
            
            <div class="mb-3">
                <label for="txtdni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="txtdni" name="txtdni" value="<?php echo ($profesor['dni_profesor']); ?>" required <?php echo $accion == "editar" ? "readonly" : ""; ?>>
            </div>
            
            <div class="mb-3">
                <label for="txtnombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="txtnombre" name="txtnombre" value="<?php echo ($profesor['nombre_profesor']); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="txtdireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="txtdireccion" name="txtdireccion" value="<?php echo ($profesor['direccion']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txtruc" class="form-label">RUC</label>
                <input type="text" class="form-control" id="txtruc" name="txtruc" value="<?php echo ($profesor['ruc']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txttelefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="txttelefono" name="txttelefono" value="<?php echo ($profesor['telefono']); ?>">
            </div>
            
            <div class="mb-3">
                <label for="txtemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="txtemail" name="txtemail" value="<?php echo ($profesor['email']); ?>">
            </div>
            
            <button type="submit" class="btn btn-success"><i class="bi bi-save me-2"></i>Guardar</button>
            <a href="listado.php" class="btn btn-secondary"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
        </form>
    </div>
</div>
