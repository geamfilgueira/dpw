<?php
$x = array($_POST["n1"], $_POST["n2"], $_POST["n3"], $_POST["n4"], $_POST["n5"], $_POST["n6"], $_POST["n7"], $_POST["n8"], $_POST["n9"], $_POST["n10"]);
$y = array();
for($i=0; $i<10; $i++)
{
	if($x[$i]%2 == 1)
	{
		$y[$i] = (($x[$i]+1)*2);
	}
	else 
	{
		$y[$i] = ($x[$i]*5);
	}
}
echo "Valores de Y: ";
for($i=0; $i<10; $i++)
{
	echo "$y[$i] || ";
}
echo "<br> Valores de X: ";
for($i=0; $i<10; $i++)
{
	echo " $x[$i] || ";
}

?>