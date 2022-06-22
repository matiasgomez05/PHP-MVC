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
		<link rel="stylesheet" href="<?= URL ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" href="<?= URL ?>Views/template/css/estilo.css">
		<link rel="stylesheet" href="<?= URL ?>Views/template/css/general.css">
	</head>
	<body>
		<!-- LOADER -->
		<div class="loading">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>

		<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?= URL ?>">Sueños en telas </a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav"">
		        <!-- <li><a href="<?= URL ?>"> Clientes </a></li> -->
		      </ul>
		  </div>
		</nav>

<?php

}

public function __destruct(){

?>
	<footer class="navbar-fixed-bottom">
		Produccion Web - Matias Gomez
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?= URL; ?>Views/template/js/bootstrap.js"></script>
	<script src="<?= URL; ?>Views/template/js/app.js"></script>
	</body>
	</html>

<?php

	}

}

?>