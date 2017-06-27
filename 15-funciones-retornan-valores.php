<?php
//Sirven para cuando quieres usar un valor que te regresan

	function cantidad_a_pagar($cantidad)
	{
		$total = $cantidad * 1.16;
		return $total;
	}
	$total_a_pagar= cantidad_a_pagar('1000');

//La variable va dentro de la función pero fuera del if y hasta arriba, no abajo
//Para imprimir la función, esta va fuera de las llaves

	function balance_banco($total_a_pagar){
		$balance = 500;
		if ($total_a_pagar > $balance) {
			echo "Tus fondos son insuficientes";
		} else {
			echo "Tu pago ha sido exitoso";
		}	
	}
	balance_banco($total_a_pagar);
?>