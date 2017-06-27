<?php

	function saludo()
	{
		echo "Hola, ¿Como estas?";
	}

	function nombre()
	{
		echo "Ricardo";
	}

	function apellido()
	{
		echo "Garrido";
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<h3> <?php saludo(); ?></h3>
		<h4> Escrito por: <?php nombre(); ?></h4>
		<h5> Su apellido es : <?php apellido(); ?></h5>
	</div>
</body>
</html>