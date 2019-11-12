<!DOCTYPE html>
<html>
<head>
	<title>Site Bootstrap</title>
	<meta charset="utf-8">
	<!-- 1ª aula 
	<style type="text/css">
		body{
			background-color: DarkTurquoise;
			color: #2F4F4F;
		}
	</style>
	-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/299d092c79.js" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		
	</div>
	<nav class="navbar navbar-dark bg-danger navbar-expand-md fixed-top">
		<a href="index.html" class="navbar-brand"><i class="fas fa-home"></i> NavLogo</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="menu" class="collapse navbar-collapse">
			<ul class="navbar-nav  ml-md-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Link 1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.html">Link 2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.html">Link 3</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.html">Link 4</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="index.html" id="menu_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.html">Link 1</a>
						<a class="dropdown-item" href="index.html">Link 2</a>
					</div>
				</li>

				<form class="form-inline">
					<div class="input-group">
						<input type="text" name="buscar" placeholder="Buscar" class="form-control input-group-prepend">
						<input type="submit" name="" class="btn btn-warning input-group-append text-white" >
					</div>
				</form>

			</ul>
		</div>

	</nav><p style="margin-bottom: 70px"></p>
