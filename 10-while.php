<?php

	$frutas = array('Melon','Sandia','Uva','Maracuya','Mango');
	//En el while se inicializa fuera, se checa la condición en el parentesis
	//Y antes de que acabe la función se hace el incremento
	$i = 0;
	//La funcion "count" te dice cuantos espacios hay en el arreglo
	while ( $i <= count($frutas)) {
		echo $frutas[$i] . "<br>";
		$i++;
	}

	echo "Este es mi ejemplo de while del 1al20" . "<br>";
	$a = 0;
	while ( $a<= 20) {
		echo $a . "<br>";
		$a++;
	}



	//En Wordpress esto es utilizado para la parte donde empiezas a imprimir las entradas
	//Si tienes una página con 10 entradas y quieres mostrar, el while es el que se encarga de ir imprimiendo la siguiente noticia
	//Y revisa que haya mas registros en la base de datos.
?>