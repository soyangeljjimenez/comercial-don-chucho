<div class="container">
	<form action="" method="POST" autocomplete="on">
		<h2>Formulario de Registro de Nuevos Clientes</h2>

		<h3>Nombre: </h3>
		<input type="text" name="name">

		<h3>Apellido: </h3>
		<input type="" name="lastname">

		<h3>Cédula de Identidad: </h3>
		<input type="ammount" name="ced">

		<br>
		<br>

		<input type="submit" value="Registrar" name="registrar">
		
		<br>
		<br>

		<a href="#">Ingresar</a>
	</form>
</div>

<?php
	if (isset($_POST["registrar"])) {
		$usersARR = file_get_contents('../storage/users.json');
		$usersarr = array($usersARR);

		$elem=count($usersarr);

		print_r($elem);
		print_r($usersarr);

		$client = array([
			'id' => $elem+1,
			'person' => array(
				'name' => $_POST["name"],
				'lastname' => $_POST["lastname"],
				'ced' => $_POST["ced"]
			)
		]);
		
		$clientJSON = json_encode($client);
		file_put_contents('../storage/users.json', $clientJSON);
	};
?>