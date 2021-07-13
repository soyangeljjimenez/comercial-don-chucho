<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="register.php" method="POST">
		Nombre<input type="text" name="nombre">
		Apellido<input type="text" name="l_name">
		Cedula<input type="ammount" name="id">
		<input type="submit" value="Registrar" name="send">
	</form>
</body>
</html>


<?php
	if (isset($_POST["send"])) {
		
		$ARRAY_USERS = [];


		class person{
			public $id;
			public $nombre;
			public $l_name;
			
			public function add_user()
			{
				# code...
			}
			public function delete_user()
			{
				# code...
			}

			public function unlock_sys()
			{
				# code...
			}
		}

		$person = new person();
		

		class user extends person{
			# code...
		}

		$user = new user();
		
		$user->id = $_POST["id"];
		$user->nombre = $_POST["nombre"];
		$user->l_name = $_POST["l_name"];
		
		array_push($ARRAY_USERS, $user);
		print_r($ARRAY_USERS);
	}
?>