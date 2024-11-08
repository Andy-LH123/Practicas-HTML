<!DOCTYPE html>
<html lang="es">
<head>
<title>Practica 2</title>
</head>
<body>

<?php

function Mensaje(){
    echo "<br>";
    echo "Hola Mundo";
}

Mensaje(); //Mandamos a llamar a la funcion

$a=10; //variable global

function Variables(){
    $b=15; //variable local ya que no se declaró
    echo "Prueba de la impresión de variables dentro <br><br>";
    echo "La variable a es $a <br>";
    echo "La variable b es $b <br><br>";
}

Variables();
    echo "Prueba de la impresión de variables fuera <br><br>";
    echo "La variable a es $a <br>";
    echo "La variable b es $b <br><br>";
?>

<!--"+ - * / % ++ --"-->
<!--"== === <> != !== > < >= <="-->
<!--"= += -= *= /= %="-->
<!--"&& AND || OR !"-->
<!--".concatenacion .=asignarconcatenacion"-->

</body>
</html>