<?php

function pizza($costo)
{
	$total = $costo * 1.16;
	return $total;
}

$valor_iva = pizza('200');
echo $valor_iva . "<br>";


function operacion($valor_iva)
{
	$banco = 50;
	if ($valor_iva < $banco) {
		echo "Tu pago ha sido realizado";
	} else {
		echo "Fondos insuficientes";
	}
}

operacion($valor_iva)
?>