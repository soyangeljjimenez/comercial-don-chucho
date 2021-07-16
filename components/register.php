<!--showing the header since hml until div.container-->
<?php include('./header.php'); ?>

<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			
			<div class="card card-body">
				<form action="save.php" method="POST" autocomplete="on">
					<div class="form-group">
						<label>Registro de Usuario</label>
						<input type="text" name="name" class="form-control" placeholder="Nombre" autofocus>
						<input type="" name="lastname" class="form-control" placeholder="Apellido">
						<input type="ammount" name="ced" class="form-control" placeholder="Cedula">
						<input type="ammount" name="phone" class="form-control" placeholder="Telefono">
						<input type="ammount" name="address" class="form-control" placeholder="Direccion">
						<input type="ammount" name="password" class="form-control" placeholder="Contraseña">
					</div>
					<div class="formgroup">
						<input type="submit"class="btn btn-success btn-block" name="register" value="Registrar Usuario">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--showing the footer since close div.container until close html-->
<?php include('./footer.php'); ?>