<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Formulario</h1>
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


	<form action="store.php" method="POST">
		<label for="name">Nombre:</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="last-name">Apellido</label>
		<input type="text" name="last-name" id="last-name">
		<br>
		<label for="id">Código</label>
		<input type="number" name="id" id="id">
		<br>
		<input type="submit">

	</form>

	
</body>
</html>

