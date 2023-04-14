<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

if($n1 !=0 && $n2 !=0)
{
	$resultado = $n1/$n2;
	echo "$resultado";
}
else
{
	echo "A divisao nao eh valida! ";
}
?>