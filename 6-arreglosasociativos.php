<?php

	$salto = "<br>";
	$alumnos = array(
		'nombre' => 'Ricardo',
		'apellido' => 'Garrido',
		'pais' => 'Mexico'
		);
	echo "Se le llaman arreglos asociativos por que se les asocia un valor, he aquí un ejemplo:";
	echo $salto;
	print_r($alumnos);
	echo "Si quiero imprimir todo el arreglo asociativo debo utilizar 'print_r' por que con 'echo' no se puede";
	echo $salto;
	echo "Si quieres imprimir solo una parte del arreglo asociativo debes poner el nombre de la variable y entre corchetes poner el valor que quieres recibir";
	echo $salto;
	echo $alumnos['apellido'];
	echo $salto;
	echo "Hola soy " . $alumnos['nombre'] . " " . $alumnos['apellido'] . " de " . $alumnos['pais'];	
?>