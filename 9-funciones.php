<?php

	$frutas = array('Uva','Melon','Fresa','Papaya','Sandia','Limon');
	$mi_nombre = "Ricardo Garrido Cruz";
	$mi_nombre2 = str_replace(' ','', $mi_nombre);

	//count($mi_nombre);
	//strlen cuenta los caracteres
	//str_replace remplaza lo que quieres que reemplace, indicandoselo
	//str_replace(search, replace, subject(aquí va la variable))
	echo strlen($mi_nombre2) . '<br>';
	echo $mi_nombre2 . '<br>';


	//Esto reemplaza las 'a' por 'e'
	$perro = "Parangutirimicuaro";
	$perro2 = str_replace('a', 'e', $perro);
	echo $perro2 . '<br>';

	//Feliz cumpleaños para Elías
	$elias = "Sorry por la tardanza, feliz cumpleaños crack";
	$elias2 = str_replace('Sorry por la tardanza, feliz cumpleaños crack', 'Sirry pir li tirdinzi, filiz cimpliañis crick', $elias);
	echo $elias2 . "<br>";

	$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
	echo $onlyconsonants . "<br>";

	//Mas crack para Elias
	$elias3 = array('a','e','o','u');
	$elayas = str_replace($elias3, "i", "Sorry por la tardanza, feliz cumpleaños crack");
	echo $elayas;

	
?>
