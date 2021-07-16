<!--showing the header since hml until div.container-->
<?php include('./components/header.php'); ?>

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
<!--showing the footer since close div.container until close html-->
<?php include('./components/footer.php'); ?>