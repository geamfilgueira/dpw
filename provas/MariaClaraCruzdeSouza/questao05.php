<?php

$X = $_POST["x"];
$Y = $_POST["y"];
$Z = $_POST["z"];

function fun ($X, $Y, $Z)
{
if($X < $Y+$Z && $Y < $X+$Z && $Z < $X+$Y)
{
	//EQUILATERO
	if($X == $Y && $X ==$Z)
	{
		echo "O triangulo eh EQUILATERO!!";
	}
	//ISOSCELE
	elseif($X == $Y || $X == $Z || $Z == $Y)
	{
		echo "O triangulo eh ISOSCELES!!";
		
	}
	//ESCALENO
	elseif($X != $Y && $X != $Z && $Z != $Y)
	{
		echo "O triangulo eh ESCALENO!!";
		
	}
}
else
{
	echo "Esses valores nao podem ser atribuidos a um triangulo!";
}
}
fun ($X, $Y, $Z);

?>