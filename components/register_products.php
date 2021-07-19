<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
			
			<div class="card card-body">
				<form action="save.php" method="POST" autocomplete="on">
					<div class="form-group">
						<label class="label">Registro de Productos</label>
						<input type="text" name="name_product" class="form-control" placeholder="Nombre del Producto" autofocus>
						<input type="text" name="presentation" class="form-control" placeholder="Presentacion">
						<input type="ammount" name="price" class="form-control" placeholder="Precio">
						<input type="ammount" name="iva" class="form-control" placeholder="IVA">
						<input type="ammount" name="total_price" class="form-control" placeholder="Precio Total">
					</div>
					<div class="formgroup">
						<input type="submit"class="btn btn-success btn-block" name="register_products" value="Registrar Producto">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--showing the footer since close div.container until close html-->
<?php include('./components/footer.php'); ?>