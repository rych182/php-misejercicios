<?php
	$nombre = "ricardo";
	$apellido = "GARRIDO";
	echo strtoupper($nombre) . "<br>";
	echo strtolower($apellido) . "<br>";

	$password = "123";

	if (strlen($password)< 8) {
		echo "La contraseña es muy debil";
	}else {
		echo "Tu contraseña es segura!!";
	}

?>