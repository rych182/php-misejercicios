<?php

function pizza($costo)
{
	$total = $costo * 1.16;
	return $total;
}

$total_iva = pizza('200');
echo $total_iva . "<br>";


function nombre($total_iva)
{
	$banco = 50;
	if ($total_iva < $banco) {
		echo "Tu pago a sido acreditado";
	} else {
		echo "Fondos insuficientes";
	}
}

nombre($total_iva)

?>