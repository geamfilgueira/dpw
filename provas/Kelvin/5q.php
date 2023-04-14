<?php

	$valorx = ['valor 1'];
	$valory = ['valor 2'];
	$valorz = ['valor 3'];
	
	if($valorx==$valory){
		echo "O triangulo é Equilatero!";
		
	}
	else if($valory==$valorz){
		echo "O triangulo é Isoscelo";
		
	}
	else if($valorx!=$valorz){
		echo "Triangulo é Escaleno";
	}
	
?>