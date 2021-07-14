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
			<!--NAV BAR-->
			<?php
				require('./components/header.php');

			?>

			<br>

			<div class="cont">
				
				<div class="card">
					<a href="./components/register.php">
						<div class="card-img">
							<img src="./static/img/children.jpg" id="img-children">
						</div>
						<div class="card-body">
							<p>Registrar Usuario</p>
						</div>
					</a>
				</div>

				<div class="card">
					<a href="#">
						<div class="card-img">
							<img src="./static/img/finger.jpg" id="img-finger">
						</div>
						<div class="card-body">
							<p>Ingresar Usuario</p>
						</div>
					</a>
				</div>

			</div>
		</div>	

		<!--FOOTER-->
		<footer>
			
		</footer>
	</body>

</html>