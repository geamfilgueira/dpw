<?php
	$x = 1;
	$y = 1;
	$z = 1;
	
	if($x == $y || $z == $y || $z == x):
		echo"O triangulo eh equilatero<br>";
	else:
		echo"O triangulo nao eh equilatero<br>";
	endif;
	
	$x = 3;
	$y = 1;
	$z = 2;
	
	if($x != $y || $z != $y || $z != x):
		echo"O triangulo eh escaleno<br>";
	else:
		echo"O triangulo nao eh escaleno<br>";
	endif;
	
	$x = 1;
	$y = 1;
	$z = 1;
	
	if($x == $y || $x != $z || $y != z):
		echo"O triangulo eh isoscele<br>";
	else:
		echo"O triangulo nao eh isoscele<br>";
	endif;
?>