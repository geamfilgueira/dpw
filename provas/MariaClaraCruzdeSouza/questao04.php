<?php

$numero = array($_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"], $_POST["n6"], $_POST["n7"], $_POST["n8"], $_POST["n9"], $_POST["n10"]);
$maior = 0;
$menor = 0;

for($i=0; $i<10; $i++)
{
	if($maior < $numero[$i])
	{
		$maior = $numero[$i];
	}
	elseif($menor > $vetor[$i])
	{
		$menor = $vetor[$i];
	}
}
echo "O maior numero eh: $maior <br> ";
echo "O numero menor eh: $menor <br> ";


?>