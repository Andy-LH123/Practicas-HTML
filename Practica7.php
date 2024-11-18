<!DOCTYPE html>

<html lang="es">

	<head>
		<title>Practica 7</title>
	</head>

	<body>

		<?php
			
			require ("config.php");
			echo "<h1>Practica 7: Creacion de una base de datos</h1><br><br>";
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
			$basededatos="Pogramacion_Web_Andres_php_2";

			$consulta="create database $basededatos";
			if ($resultado=mysqli_query($conexion,$consulta)){
				echo "La base de datos $basededatos, se creó con exito<br>";
				echo "El script utilizado fue: $consulta <br><br>";
			}
			else{
				"La base de datos $basededatos no se ha podido crear<br>".mysqli_error($conexion);
			}
			echo "<br><br>";
			mysqli_close($conexion);

		?>

	</body>

</html>