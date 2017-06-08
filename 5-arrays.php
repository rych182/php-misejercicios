<?php

	$salto = "<br>";
	$frutas = array('Peras ', 'Manzanas ', 'Uvas ', 'Platanos ', 'Melones ', 'Sandias ');
	array_push($frutas, 'Kiwis ');

	echo "Los arreglos se declaran con la palabra 'array' y son de lo mas común en PHP";
	echo $salto;
	echo "Los arreglos en PHP siempre las posiciones empiezan con 0 y luego 1,2,3 etc";
	echo $salto;
	echo "Aquí va un ejemplo de arreglo";
	echo $salto;
	echo $frutas[1] . $frutas[6];
	echo $salto;
	echo"La funcion array_push sirve para agregarle una variable mas a un arreglo ya existente";
	echo $salto;
	echo "La función 'print_r' sirve para mostrar el arreglo y la posicioón que tienes.";
	echo $salto;
	print_r($frutas);
	echo $salto;
	unset($frutas[1]);
	print_r($frutas);
	echo $salto;
	echo "La funcion unset elimina una variable dentro de un array, solo debes indicarle así: [1], cual es la variable que deseas eliminar";
?>