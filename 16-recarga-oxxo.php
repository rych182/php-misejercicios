<?php

	function recarga($saldo)
	{
		$total = $saldo * 1.2;
		return $total;
	}
	$telcel = recarga('100');
	echo $telcel . "<br>";

	function cuenta_banco($telcel)
	{
		$cuenta = 200;
		if ($telcel > $cuenta) {
			echo "Tu saldo es insuficiente";
		}	else {
			echo "Tu recarga ha sido realizada";
		}
	}
	cuenta_banco($telcel)

?>