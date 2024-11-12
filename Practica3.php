<!DOCTYPE html>

<html lang="es">

	<head>
		<title>Practica 3</title>
	</head>

	<body>

		<?php
			
			$a=10;
			$b=5;			
			$c=15;
			$d=20;		
			$e=10;

			function showtrue(){
				ECHO "true<br>";
			}

			function showfalse(){
				ECHO "false<br>";
			}

			
			$a1=$a+5;
			$a2=$a-5;
			$a3=$a*5;
			$a4=$a/5;
			$a5=$a%5;
			
			ECHO	"<b>OPERADORES ARITMÉTICOS</b><br>
					Esto es una suma 10+5=$a1<br>
					Esto es una resta 10-5=$a2<br>
					Esto es una multiplicación 10*5=$a3<br>
					Esto es una división 10/5=$a4<br>
					El residuo de esta división es 10%5=$a5<br><br>";
			
			$a++;
			++$b;
			$c--;
			--$d;

			ECHO	"<b>OPERADORES DE INCREMENTO Y DECREMENTO</b><br>
					La variable a vale 10, sin embargo si aplico un Posincremento el resultado será el mismo ya que el incremento le hace después $ a ++: $a<br>
					La variable b vale 5, sin embargo si aplico un Preincremento el resultado cambia ya que el incremento lo hace en el momento ++$ b: $b<br>
					La variable c vale 15, sin embargo si aplico un Posdecremento el resultado será el mismo ya que el decremento lo hace después $ c --: $c<br>
					La variable d vale 20, sin embargo si aplico un Predecremento el resultado cambia ya que el decremento lo hace en el momento --$ d: $d<br><br>";
			
			$a--;
			--$b;
			$c++;
			++$d;
			
			ECHO	"<b>OPERADORES DE COMPARACIÓN</b><br>
					Nos dirán si las variables cumplen con las condiciones o no<br>
					La variabe a es igual a 5*2 $ a == 5*2: ";
			
			if ($a == 5*2) {
				showtrue();
			} else {
				showfalse();
			}
			
			ECHO 	"La variable a es idéntica a la variable e $ a === $ e: ";

			if ($a === $e) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a es mayor que la variable b $ a > $ b: ";

			if ($a > $b) {
				showtrue();
			} else {
				showfalse();
			}


			ECHO 	"La variable a es menor que la variable c $ a < $ c: ";

			if ($a < $c) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a es distinta a la variable d $ a != $ d: ";

			if ($a != $d) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a es distinta a la variable d $ a <> $ d: ";

			if ($a <> $d) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a no es idéntica a la variable e $ a !== $ e: ";

			if ($a !== $e) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a es mayor o igual que la variable b $ a >= $ b: ";

			if ($a >= $b) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"La variable a es menor o igual que la variable b $ a <= $ b: ";

			if ($a <= $b) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"<br>";

			ECHO	"<b>OPERADORES DE ASIGNACIÓN</b><br>";
			$a=5;
			ECHO	"Variable a con el operador =5: $a<br>";
			$a+=5;
			ECHO	"Variable a con el operador +=5: $a<br>";
			$a-=5;
			ECHO	"Variable a con el operador -=5: $a<br>";
			$a*=5;
			ECHO	"Variable a con el operador *=5: $a<br>";
			$a/=5;
			ECHO	"Variable a con el operador /=5: $a<br>";
			$a%=5;
			ECHO	"Variable a con el operador %=5: $a<br><br>";

			$a=10;
					
			ECHO	"<b>OPERADORES LÓGICOS</b><br>
					Nos dirán si las variables cumplen con más de una condición a la vez o no<br>
					La variable a es mayor que b y menor que c usando $ a > $ b && $ a < $ c: ";
			
			if ($a > $b && $a < $c) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es mayor que b y mayor que c usando $ a > $ b AND $ a > $ c: ";

			if ($a > $b AND $a > $c) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es mayor que d o mayor que e usando $ a > $ d || $ a > $ e: ";

			if ($a > $d || $a > $e) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es menor que d o menor que e usando $ a < $ d OR $ a < $ e: ";

			if ($a < $d OR $a < $e) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO 	"<br>";

			ECHO	"Ahora vamos a usar el operador ! al principio de las expresiones anteriores para visualizar el resultado opuesto: <br><br>";

			ECHO 	"La variable a es mayor que b y menor que c usando $ a > $ b && $ a < $ c: ";
			
			if (!($a > $b && $a < $c)) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es mayor que b y mayor que c usando $ a > $ b AND $ a > $ c: ";

			if (!($a > $b AND $a > $c)) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es mayor que d o mayor que e usando $ a > $ d || $ a > $ e: ";

			if (!($a > $d || $a > $e)) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"La variable a es menor que d o menor que e usando $ a < $ d OR $ a < $ e: ";

			if (!($a < $d OR $a < $e)) {
				showtrue();
			} else {
				showfalse();
			}

			ECHO	"<br>";

			ECHO	"<b>OPERADORES DE CONCATENACIÓN</b><br>
					Vamos a concatenar las variables a, b, c, d y e con el operador . : " . $a . $b . $c . $d . $e . "<br>";
			
			ECHO	"Ahora vamos a concatenar las variables de manera consecutiva con operador .= : ";

			$variables="";

			$variables.=$a;
			$variables.=$b;
			$variables.=$c;
			$variables.=$d;
			$variables.=$e;

			ECHO	"$variables";

		?>

	</body>

</html>