<?php
$empleado = EmpleadosController::ObtenerPorId($_GET['id']);
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Editar Empleado</h2>
    <a href="index.php" class="btn btn-secondary">Volver</a>
</div>

<div class="card">
    <div class="card-body">
        <form action="index.php?action=actualizar" method="POST">

            <input type="hidden" name="txtId" value="<?php echo $empleado['id']; ?>">

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="txtNombre" class="form-control" value="<?php echo htmlspecialchars($empleado['nombre']); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Puesto</label>
                <input type="text" name="txtPuesto" class="form-control" value="<?php echo htmlspecialchars($empleado['puesto']); ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Salario</label>
                <input type="number" step="0.01" name="txtSalario" class="form-control" value="<?php echo $empleado['salario']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de Ingreso</label>
                <input type="date" name="txtFechaIngreso" class="form-control" value="<?php echo $empleado['fecha_ingreso']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>
    </div>
</div>
