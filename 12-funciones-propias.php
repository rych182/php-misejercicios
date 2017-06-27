<?php

	function saludar()
	{
		echo "Hola mundo" . "<br>";
	}

	saludar();
	saludar();
	saludar();
	saludar();

	function suma()
	{
		echo 2 + 2 . "<br>";
	}
	suma();

	//crear las funciones y solo mandarlas llamar cuando las necesites

	function resta(){
		echo 7-2;
	}

	function resultado()
	{
		echo suma() + resta() ;
	}

	
?>