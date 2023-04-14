<?php
	$cliente['nome'] = $_POST["nome"];
	$cliente['endereco'] = $_POST["endereco"];
	$cliente['telefone'] = $_POST["telefone"];
	$cliente['email'] = $_POST["email"];
	
	$quantidade = $_POST["quantidade"];
	
	$x;
	
	for($i = 0; $i < $quantidade; $i++){
		if($i > 0){
			$x[$i*4] = $cliente['nome'];
			$x[$i*4 + 1] = $cliente['endereco'];
			$x[$i*4 + 2] = $cliente['telefone'];
			$x[$i*4 + 3] = $cliente['email'];
			
		} else {
			$x[$i] = $cliente['nome'];
			$x[$i+1] = $cliente['endereco'];
			$x[$i+2] = $cliente['telefone'];
			$x[$i+3] = $cliente['email'];
		}
	}
	
	for($i = 0; $i < $quantidade; $i++){
		if($i > 0){
			echo "Vetor cliente".$i.": ".$x[$i*4]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i*4+1]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i*4+2]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i*4+3]."<br>";
			
		} else {
			echo "Vetor cliente".$i.": ".$x[$i]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i+1]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i+2]."<br>";
			echo "Vetor cliente".$i.": ".$x[$i+3]."<br>";
		}
	}
	echo "<a href='index.html'>Página inicial</a>";
?>