<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<title>Comercial Don Chucho | Welcome</title>
		<link rel="stylesheet" type="text/css" href="./static/css/style.css">
	</head>

	<body>
		<div class="container">
		
			<header>
				<h1>
					<a href="./index.php">Comercial Don Chucho</a>
				</h1>
				<nav class="menu">
					<ul>
						<li>
							<a href="#">Buy</a>
						</li>
						<li>
							<a href="./views/stock.php">Stock</a>
						</li>
						<li>
							<a href="./views/clients.php">Clients</a>
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

<!--stablishing connexion with database and error handle-->
	<?php
	if ($conn) {
	?>
		<div class="connok">STABLISHED CONEXION WITH DATA BASE</div>
	<?php
	}else{
	?>
		<div class="connerr">ERROR CONEXION WITH DATA BASE</div>
	<?php
	}
?>

<!--showing the footer-->
<?php include('./components/footer.php'); ?>