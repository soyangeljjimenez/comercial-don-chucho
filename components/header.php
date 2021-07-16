<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<title>Comercial Don Chucho | Welcome</title>
		<link rel="stylesheet" type="text/css" href="./static/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./static/css/style.css">
	</head>

	<body>
		<div class="container">
		
		<header>
			<nav class="navbar navbar-dark bg-dark">
				<a href="./index.php" class="navbar-brand">
					<h1>Comercial Don Chucho</h1>
				</a>
			
				<ul>
					<li><a href="#">Buy</a></li>
					<li><a href="./stock.php">Stock</a></li>
					<li><a href="./clients.php">Clients</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</header>

		<?php $conn=mysqli_connect('localhost','root','','comercialdonchucho');?>