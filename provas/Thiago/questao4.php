<?php
	
	$numeros = array($_POST["numero1"], $_POST["numero2"], $_POST["numero3"], $_POST["numero4"], $_POST["numero5"], $_POST["numero6"], $_POST["numero7"], $_POST["numero8"], $_POST["numero9"], $_POST["numero10"]);
	$numeroMaior = $numeros[0];
	$numeroMenor = $numeros[0];
	
	for($i = 0; $i < 10; $i++){
		if($numeros[$i] < $numeroMenor){
			$numeroMenor = $numeros[$i];
		}
		if($numeros[$i] > $numeroMaior){
			$numeroMaior = $numeros[$i];
		}
	}
	
	echo "Número maior: ". $numeroMaior. "<br>";
	echo "Número menor: ". $numeroMenor. "<br>";
	
	echo "<a href='index.html'>Página inicial</a>";
?>