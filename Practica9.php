<!DOCTYPE html>

<html lang="es">

	<head>
		<title>Practica 9</title>
	</head>

	<body>

		<?php
			
			require ("config.php");
			echo "<h1>Practica 9: Creacion de una tabla en una base de datos</h1><br><br>";
			
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
			$tabla="Alumno";

			$consulta="create table $tabla (ID_Alumno int auto_increment primary key, Nombre varchar(50));";

			$resultado=mysqli_query($conexion,$consulta);
			
			if ($resultado) {
				echo "La tabla $tabla se creó con éxito en $bd";
			}

			else {
				echo "La tabla $tabla no se pudo crear.<br>";
				echo "Error: " . mysqli_error($conexion);
			}

			echo "<br><br>";
			
			echo "Se utilizó la consulta: $consulta";

			mysqli_close($conexion);

		?>

	</body>

</html>