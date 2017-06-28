<?php

function pizza($costo)
{
	$total = $costo * 1.16;
	return $total;
}
$valor_total = pizza('200');
echo $valor_total;

function pago($valor_total)
{
	$banco = 400;
	if ($valor_total < $banco) {
		echo "Tu pago ha sido exitoso";
	} else {
		echo "Fondos insuficientes";
	}
}
	pago($valor_total)
?>