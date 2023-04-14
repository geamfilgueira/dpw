<?php
$v1 = $_POST['n1'];
$v2 = $_POST['n2'];
$div = $v1/$v2;

if($v1 == 0){
	echo "Desculpe, nao eh possivel dividir por zero.";
}

elseif($v2 == 0){
	echo "Desculpe, nao eh possivel dividir por zero.";
}

else{
	echo "O resultado da divisao eh: " . $div; 
}
?>

<br>
<a href='index.html'> Volte a home page </a>