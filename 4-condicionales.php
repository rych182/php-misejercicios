<?php

	$num1 = 20;
	$num2 = 15;
	$espacio = "<br>";
	$usuario_logeado = true;

	if ($num1 > $num2) {
		echo "El numero $num1 es mayor que $num2 ";
	} else {
		echo "El numero $num1 NO es mayor que $num2";
	}
		echo $espacio;
		echo "Las condicionales sirven para varias cosas como las siguientes";
		echo $espacio;
		echo "1-Demostrar si un dígito es mayor, menor o igual que otro dígito";
		echo $espacio;
		echo "2-Para ejecutar acciones en dado caso de que se cumpla una circunstancia";
		echo $espacio;
		echo "Dos signos de igual '==' sirven para comparar";
		echo $espacio;
		echo $espacio . $espacio;
		echo "Comparare si un numero es igual a otro:";
		echo $espacio;

		if ($num1 == $num2) {
			echo "$num1 es igual a $num2";
		} else {
			echo "$num1 no es igual a $num2";
		}
		echo $espacio;
		echo "Para checar si no son iguales usas los signos '!=' que significa diferente de";
		echo $espacio;

		if ($num1 != $num2) {
			echo "$num1 y $num2 no son iguales";
		} else
		echo "$num1 y $num2 si son iguales";

		echo $espacio . $espacio;
		echo "Esta es una muestra de como iniciar sesión cuando alguna vez lo tenga que hacer en Wordpress";
		echo $espacio;
		echo "<hr>";
		echo $espacio;

		if ($usuario_logeado) {
			echo "Has iniciado sesión";
		} else {
			echo "Por favor inicia sesión";
		}


?>