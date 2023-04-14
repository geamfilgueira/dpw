<?php
	$x = $_POST["x"];
	$y = $_POST["y"];
	$z = $_POST["z"];
	
	
	function triangulo($x, $y, $z){
		if($x < ($y + $z) and $y < ($x + $z) and $z < ($x + $y)){
			if($x == $y and $x == $z){
				echo "Triângulo equilátero<br>";
			} else if ($x != $y and $x != $z){
				echo "Triângulo escaleno<br>";
			} else {
				echo "Triângulo isóscele<br>";
			}
		} else {
			echo "Medidas de triângulo inválida <a href='questao5.html'>tente novamente</a><br>";
		}	
	}
	triangulo($x, $y, $z);
	
	echo "<a href='index.html'>Página inicial</a>";
?>