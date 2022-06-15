<div class="box-principal">
<h3 class="titulo">Listado de Usuarios<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listado de Usuarios</h3>
	  </div>
	  <div class="panel-body">
	    <table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>id</th>
		      <th>Nombre</th>
		      <th>Apellido</th>
		      <th>DNI</th>
		      <th>Usuario</th>
		      <th>Fecha de creación</th>
		      <th>Acción</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
				while($row = mysqli_fetch_array($datos)){ 
				$fechaCreacion = new DateTime($row['fecha_creacion']);
			?>
		  	<tr>
		  		<td><?= $row['id']; ?></td>
			    <td><?= $row['nombre']; ?></td>
			    <td><?= $row['apellido']; ?></td>
			    <td><?= $row['dni']; ?></td>
			    <td><?= $row['usuario']; ?></td>
			    <td><?= $fechaCreacion->format('d/m/Y'); ?></td>
			 	<td>
					<a class="btn btn-warning" href="<?php echo URL; ?>Usuarios/editar/<?php echo $row['id']; ?>">Editar</a>
					<a class="btn btn-danger" href="<?php echo URL; ?>Usuarios/eliminar/<?php echo $row['id']; ?>">Eliminar</a>
				</td>
			</tr>
			<?php } ?>
		  </tbody>
		</table> 
	  </div>
	</div>
</div>