<?php
		require('conexion.php');

		if(count($_POST) > 0) {
			$name = $_POST['name'];
			$lastname = $_POST['last-name'];
			$id = $_POST['id'];
			$sql = "INSERT INTO users (name, lastname, id) VALUES ('$name', '$lastname', '$id')";
			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			header('Location: index.php');

		}

	?>