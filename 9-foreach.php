<?php

	$frutas = ['Aguacate','Melon','Platano','Mango','Fresa','Durazno','Manzana'];
	echo $frutas[0] . '<br><br>';
	echo "Si quiero imprimir todo lo que esta dentro del array sin escribir mucho código, el FOREACHE me ayudara." . '<br>';
	foreach ($frutas as $fruta) {
		echo "Una de mis frutas favoritas es: " . $fruta . '<br>';
	}
	echo "Todo lo que este dentro del FOREACHE sera incluído";

?>