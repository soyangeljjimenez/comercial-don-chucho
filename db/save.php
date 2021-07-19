<?php

	include('./conn_db.php');

	if (isset($_POST['register'])) {
		$name=$_POST['name'];
		$lastname=$_POST['lastname'];
		$ced=$_POST['ced'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$password=$_POST['password'];

		$query="INSERT INTO users(name, lastname, cedula, phone, address, password) VALUES ('$name', '$lastname', '$ced', '$phone', '$address', '$password')";

		$result=mysqli_query($conn, $query);

		if (!$result) {
			exit("Query Failed");
		}

		$_SESSION['message'] = 'Task Saved Successfully';
		$_SESSION['message_type'] = 'success';
		
		header('Location: ../views/clients.php');
	}else if (isset($_POST['register_products'])) {
		$name_product=$_POST['name_product'];
		$presentation=$_POST['presentation'];
		$price=$_POST['price'];
		$iva=$_POST['iva'];
		$total_price=$_POST['total_price'];

		$query_products="INSERT INTO products(name_product, presentation, price, iva, total_price) VALUES ('$name_product', '$presentation', '$price', '$iva', '$total_price')";

		$result_products=mysqli_query($conn, $query_products);
		
		if (!$result_products) {
			exit("Query Failed");
		}

		header('Location: ../views/clients.php');
	}
?>