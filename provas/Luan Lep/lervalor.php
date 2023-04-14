<?php

$valor1 = $_POST['v1'];
$valor2 = $_POST['v2'];

	if($valor2==0){
		echo "Nao foi possivel executar a divisao, tente com outros valores";
	}else if($valor1==0){
		echo "Nao foi possivel executar a divisao, tente com outros valores";
	}else{
		$divi = ($valor1) / ($valor2);

	echo "O resultado da divisao e $divi";
	}


?>