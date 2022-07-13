<div class="panel panel-success">
	<div class="panel-heading">
        <h3 class="panel-title">
            <a class="btn btn-warning text-black py-0 me-2" href="<?php echo URL; ?>usuarios">🡸</a>
            Editar usuario - <?= $datos['apellido'].' '.$datos['nombre'] ?>
            <hr>
        </h3>
	</div>
    <div class="panel-body">
	  	<div class="row">
            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-3">
				    <label for="nombre" class="control-label">Nombre</label>
                    <input class="form-control" name="nombre" id="nombre" type="text" value="<?= $datos['nombre'] ?>" required>
                </div>
                <div class="form-group mt-3">
				    <label for="apellido" class="control-label">Apellido</label>
                    <input class="form-control" name="apellido" id="apellido" type="text" value="<?= $datos['apellido'] ?>" required>
                </div>
                <div class="form-group mt-3">
				    <label for="dni" class="control-label">DNI</label>
                    <input class="form-control" name="dni" id="dni" type="number" value="<?= $datos['dni'] ?>" required>
                </div>
                <div class="form-group mt-3">
				    <label for="usuario" class="control-label">Usuario</label>
                    <input class="form-control" name="usuario" id="usuario" type="text" value="<?= $datos['usuario'] ?>" required>
                </div>
                <div class="form-group mt-3">
				    <label for="pass" class="control-label">Contraseña</label>
                    <input class="form-control" name="pass" id="pass" type="password" value="<?= $datos['pass'] ?>" required>
                </div>
                <div class="form-group mt-4">
                    <input type="hidden" name="id" value="<?= $datos['id']; ?>">
                    <button type="submit" class="btn btn-success fw-bold">Modificar usuario</button>
				</div>
			</form>
        </div>
	</div>
</div>