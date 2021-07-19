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

			<?php include('../db/conn_db.php'); ?>

			 <br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Presentación</th>
						<th>Costo sin I.V.A</th>
						<th>Ultimo Añadido</th>
					</tr>
				</thead>

				<tbody>

					<?php
						$query_products="SELECT * FROM products";
						$result_products= mysqli_query($conn, $query_products);

						while ($row_products=mysqli_fetch_array($result_products)) {
					?>
							<tr>
								<td><?php echo $row_products['name_product'] ?></td>
								<td><?php echo $row_products['presentation'] ?></td>
								<td><?php echo $row_products['price'] ?></td>
								<td><?php echo $row_products['last_added'] ?></td>
							</tr>
					<?php } ?>

				</tbody>
			</table>