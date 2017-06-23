<?php
	$salto = "<br>";
	$nom1 = "Fulano";
	$nom2 = "Perengano";
	$nom3 = "Sutano";
	$nom4 = "Brayan";
	$nom5 = "Kevin";

	for ($a=0; $a < 20 ; $a++) { 
		echo $a;
		echo "<br>";
	}
	echo $salto;
	echo "También se puede ir hacia atras con un For, utilizando --";
	echo $salto;
	for ($b=50; $b >= 0 ; $b--) { 
		echo $b;
		echo $salto;
	}
	echo "Y también se puede sumar o restar de un numero hasta otro sin necesidad de que sea 0 o 100";
	echo $salto;
	for ($c=20; $c <= 30 ; $c++) { 
		echo $c;
		echo $salto;
	}

	echo "Also you can initialize this";
	echo $salto;
	for ($d=0; $d < 10; $d++) { 
		echo $d;
		echo $salto;
	}
	if ($d == 9) {
			echo "Ya llegue a nueve";
		} else {
			echo "Esta chingadera no ha llegado a 9";
		}

	echo $salto;
	echo "También puedes hacer paradas en tus bucles con la palabra 'continue'";
	for ($e = 0; $e < 10 ; $e++) { 
		if ($e == 5) {
			echo "I'm in the number five Mom <br>";
			continue;
		}
		echo $e;
		echo $salto;
	}

	echo $salto;
	echo "And also you can stop your bucle with the word 'exit'";
	echo $salto;
	for ($f=0; $f < 10 ; $f++) { 
		if ($f == 5) {
			echo "Mom, here i'll stop the bucle with the word EXIT";
		}
		echo $f;
		echo $salto;
	}
	$salto;
	echo "ALWAYS REMEMBER when you use the word 'exit' for stop all the bucle, if after you want use other bucle, you can't do it, utilizala sabiamente";

	echo $salto;
	echo "Ahora otra prueba imprimiendo cosas a lo buey";
	for ($g=0; $g < 5; $g++) { 
		echo $g;
		echo $salto;
	}

?>
