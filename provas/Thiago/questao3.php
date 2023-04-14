<?php
	$valor1 = $_POST["valor1"];
	$valor2 = $_POST["valor2"];
	
	if($valor2 != 0){
		$divisao = $valor1/$valor2;
		echo "Valor1 dividido pelo valor2 é: <br>". $divisao;
	} else {
		echo "ERRO NENHUM NÚMERO PODE SER DIVIDIDO POR ZERO, <a href='questao3.html'>TENTE NOVAMENTE!!</a><br>";
	}
	
	echo "<a href='index.html'>Página inicial</a>";
?>