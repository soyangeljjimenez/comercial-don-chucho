<?php
	//string
	$included_file_register=file_get_contents("../components/register.php");
	$included_file_show=file_get_contents("../views/users.php");

	$doc = new DOMDocument;

	$registrar = $doc->getElementById('reg');
	$form = $doc->getElementById('form');
	$mostrar = $doc->getElementById('show');

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<title>Comercial Don Chucho | Welcome</title>
		<link rel="stylesheet" type="text/css" href="../static/css/style.css">
	</head>

	<body>
		<div class="container">
		
			<header>
				<h1>
					<a href="../index.php">Comercial Don Chucho</a>
				</h1>
				<nav class="menu">
					<ul>
						<li>
							<a href="#">Buy</a>
						</li>
						<li>
							<a href="./stock.php">Stock</a>
						</li>
						<li>
							<a href="./clients.php">Clients</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
						<li>
							<a href="$">About</a>
						</li>
					</ul>
				</nav>
			</header>

			<br>

			<div class="card-container">
				<div class="card" id="reg">

					<div id="form">
						<form action="../db/save.php" method="POST" autocomplete="on">
							<div class="form-group">
								<label>Registro de Usuario</label>	
							</div>
							
							<div class="form-group">
								<input type="text" name="name" placeholder="Nombre" autofocus>
								<input type="text" name="lastname" placeholder="Apellido">
								<input type="ammount" name="ced" placeholder="Cedula">
								<input type="ammount" name="phone" placeholder="Telefono">
								<input type="text" name="address" placeholder="Direccion">
								<input type="ammount" name="password" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<button type="submit" name="register">Registrar Usuario</button>
							</div>
						</form>
					</div>
					
				</div>
				<div class="card">
					<a>
						<img src="../static/img/children.jpg" class="d-none-reg">
						Registrar Usuario
					</a>
				</div>
			</div>