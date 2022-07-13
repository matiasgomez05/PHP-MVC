<div class="panel panel-success">
  	<div class="panel-body">
		<h3>Listado de Usuarios
			<hr>
			<a class="btn btn-success fw-bold mb-3" href="<?php echo URL; ?>usuarios/agregar">Agregar usuario</a>
		</h3>
		<table class="table table-striped table-hover ">
		<thead>
			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>DNI</th>
			<th>Usuario</th>
			<th>Fecha de creación</th>
			<th>Ultima modificación</th>
			<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($row = mysqli_fetch_array($datos)){ 
			$fechaCreacion = new DateTime($row['fecha_creacion']);
			$ultimaModificacion = new DateTime($row['ultima_modificacion']);
			?>
			<tr>
				<td><?= $row['id']; ?></td>
				<td><?= $row['nombre']; ?></td>
				<td><?= $row['apellido']; ?></td>
				<td><?= $row['dni']; ?></td>
				<td><?= $row['usuario']; ?></td>
				<td><?= $fechaCreacion->format('d/m/Y'); ?></td>
				<td><?= $ultimaModificacion->format('d/m/Y') ?></td>
				<td>
					<a class="btn btn-warning fw-bold" href="<?= URL; ?>usuarios/editar/<?= $row['id']; ?>">Editar</a>
					<!-- <a class="btn btn-danger fw-bold" href="<?= URL; ?>usuarios/eliminar/<?= $row['id']; ?>" onClick="eliminar()">Eliminar</button> -->
					<button class="btn btn-danger fw-bold" onClick="eliminar()">Eliminar</button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		</table> 
  	</div>
</div>