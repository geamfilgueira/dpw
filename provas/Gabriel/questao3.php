<?php

	$V1 = $_POST ['valor1'];
	$V2 = $_POST ['valor2'];

	if ($V2 == 0) {
		echo "não eh possivel dividir por 0";
	 }else{
	echo "A divisão da ". $V1 / $V2;
	};
?>