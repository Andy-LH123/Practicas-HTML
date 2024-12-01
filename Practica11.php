<?php
			
	require ("config.php");
	$conexion=mysqli_connect($servidor, $usuario, $password, $bd);

    $nombre=$_POST['nombre'];
    $carrera=$_POST['carrera'];
    $escuela=$_POST['escuela'];

    $consulta="insert into alumnos (nombre, carrera, escuela) VALUES ('$nombre', '$carrera', '$escuela')";

    if ($resultado = mysqli_query($conexion, $consulta)) {
                
        echo "Registro guardado con éxito.";
                
    }
    else{

        die ("No se pudieron guardar los datos <br><br> Error: " . mysqli_error($conexion));

    }

?>