<?php

	echo 2 + 2;
	echo "<br>";
	echo 2-2;
	echo "<br>";
	echo 2*2;
	echo "<br>";
	echo 2/2;
	echo "<br>";
	echo 2 * (2*2);
	echo "<br>";
	echo 4 / (1+1);
	echo "<br>";

	//Esto sirve para hacer operaciones dentro de la misma variable

	$total= 20;
	$total += 5; //primero el signo de operación y luego el "="
	$total -=10;
	$total *=3;
	$total /=5;

	//Esto sirve para que no creemos tantas variables diferentes
	echo "El total es: " . $total;
	echo "<br>";

	for ($i=1; $i <= 100 ; $i++) { 
		if ($i % 2 == 0) {
			echo "El numero" . $i . "es par" . "<br>";
		} else {
			echo "El numero" . $i ." es impar" . "<br>";
		}
	}
?>