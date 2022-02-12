<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conexión a base de datos</title>
</head>
<body>
	<?php
		require('conexion.php');
	?>

	<h1>Tabla</h1>
	<br>
	<div class="header">
		<ul>
			<li>
				<a href="index.php">Inicio</a>
			</li>
			<li>
				<a href="formulario.php">Formulario</a>
			</li>
		</ul>
	</div>

	<table>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Apellido</th>

		</tr>
	</table>

	<?php
		$sql = "SELECT id, name, lastname FROM users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
	?>
			  	<tr>
			  		<td><?php echo $row['id']; ?></td>
			  		<td><?php echo $row['name']; ?></td>
			  		<td><?php echo $row['lastname']; ?></td>
			  	</tr>
			  	<br>
			<?php
			} 
		  
		} else {
		  echo "0 results";
		}
		?>
	
</body>
</html>