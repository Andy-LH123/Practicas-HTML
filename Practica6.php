<!DOCTYPE html>

<html lang="es">

	<head>
		<title>Practica 6</title>
	</head>

	<body>

		<?php
			
			require ("config.php");
			echo "<h1>Practica 6: Conexion a mi servidor de datos MYSQL </h1><br>";
			if ($conexion=mysqli_connect($servidor,$usuario,$password,$bd)){
				echo "Tu conexion ha sido exitosa";
			}
			else{
				echo "Error conectando con Mysql<br>", mysqli_connect_error();
			}

			echo "<br><br>";

			mysqli_close($conexion);

		?>

	</body>

</html>