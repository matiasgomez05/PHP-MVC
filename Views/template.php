<?php namespace Views;
$template = new Template();

class Template{

	public function __construct(){

?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sueños en telas </title>
		<link rel="stylesheet" href="<?= URL ?>Views/template/css/estilo.css">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>

		<div class="container-fluid">
			<!-- LOADER -->
			<div class="loading">
				<div></div><div></div><div></div><div></div>
			</div>

  			<div class="row">
				<nav class="col-xl-2 py-3 bg-light navbar-expand-xl max-height: 100%">
					<div>
						<div class="d-block">
							<h3>Sueños en telas</h3>
							<hr>
						</div>
						<div class="d-flex justify-content-between">
							<div class="py-2 align-items-center">
								<img src="<?= URL ?>Views/template/imagenes/sillon.png" class="me-2"><p class="d-inline text-danger fs-5 fw-bold">Admin Panel</p>
							</div>
							<a class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-controls="collapseExample" aria-expanded="false" aria-label="Toggle navigation">
								<img src="<?= URL ?>Views/template/imagenes/listar.png" alt=""></a>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="collapseExample">
						<ul class="navbar-nav nav-pills flex-column mt-3 ms-2 fs-5 fw-bold">
							<li class="nav-item">
								<a class="nav-link" href="<?= URL ?>usuarios">☼ Usuarios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= URL ?>clientes">☼ Clientes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#">☼ Productos</a>
							</li>
						</ul>
					</div>
				</nav> 
				<div class="contenido col-xl-10 py-3 bg-white" style="min-height: 640px">

<?php

}

public function __destruct(){

?>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-auto">
			<div class="row">
				<p class="text-center fs-4 fw-lighter">Produccion Web - Matias Gomez</p>
			</div>	
		</div>

		<!-- Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- Sweet Alert -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- JS de la App -->
		<script src="<?= URL; ?>Views/template/js/app.js"></script>	
	</body>
	</html>

<?php

	}

}

?>