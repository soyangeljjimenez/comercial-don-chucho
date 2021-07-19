<table class="table table-bordered">
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Fecha de Creacion</th>
		</tr>
	</thead>

	<tbody>

		<?php
			$query_users="SELECT * FROM users";
			$result_users= mysqli_query($conn, $query_users);

			while ($row_users=mysqli_fetch_array($result_users)) {
		?>
				<tr>
					<td><?php echo $row_users['id'] ?></td>
					<td><?php echo $row_users['name'] ?></td>
					<td><?php echo $row_users['lastname'] ?></td>
					<td><?php echo $row_users['address'] ?></td>
					<td><?php echo $row_users['created_at'] ?></td>
				</tr>
		<?php } ?>

	</tbody>
</table>