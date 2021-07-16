<!--showing the header since hml until div.container-->
<?php include('./components/header.php'); ?>

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

<!--showing the footer since close div.container until close html-->
<?php include('./components/footer.php'); ?>