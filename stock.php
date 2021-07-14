<!--
	Republica Bolivariana de Venezuela
	Ministerio del Poder Popular para Educacion Universitaria
	Universidad Bolivariana de Venezuela
	P.F.G. Informatica para la Gestion Social - 3er semestre
	Unidad Curricular: Laboratorio de Aplicaciones Web - Profesora: Marisela Alvarez
	Estudiante: Angel J. Jimenez C. V-26921917
	Archivo: stock.php
-->
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<title>Comercial Don Chucho | Stock</title>
		<link rel="stylesheet" type="text/css" href="./static/css/style.css">
	</head>

	<body>
		<div class="container">
			<!--NAV BAR-->
			<header>
				<nav class="menu">
					<a href="./index.html">
						<h1>Comercial Don Chucho</h1>
					</a>
					<ul>
						<li><a href="./users.php">Buy</a></li>
						<li><a href="./stock.php">Stock</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</nav>
			</header>

			<br>

			<div class="cont">
				<table>
					<tbody>
						<tr><th>Producto</th>	<th>Presentación</th>	<th>Costo sin I.V.A</th>	<th>I.V.A</th>	<th>Costo Total</th></tr>
						<?php
							$productsSTR = file_get_contents('./storage/products.json');
							$productsPHP = json_decode($productsSTR, true);

							foreach ($productsPHP as $products => $value) {
								echo "<tr>";
								foreach ($value as $key => $valor) {
									echo "<td>$valor</td>";
								}
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>	

		<!--FOOTER-->
		<footer>
			
		</footer>
	</body>

</html>