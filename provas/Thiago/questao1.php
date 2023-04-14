<?php
	$x = array($_POST["numero1"], $_POST["numero2"], $_POST["numero3"], $_POST["numero4"], $_POST["numero5"], $_POST["numero6"], $_POST["numero7"], $_POST["numero8"], $_POST["numero9"], $_POST["numero10"]);
	for($i = 0; $i < 10; $i++){
		if(($i % 2) == 0){
			$y[$i] = ($x[$i] * 5);
		} else {
			$y[$i] = (($x[$i] + 1) * 2);
		}
	}

	for($i = 0; $i < 10; $i++){
		echo "Vetor x[".$i."]: ".$x[$i]."<br>";
	}
	echo "---------------------<br>";
	for($i = 0; $i < 10; $i++){
		echo "Vetor y[".$i."]: ".$y[$i]."<br>";
	}
	
	echo "<a href='index.html'>Página inicial</a>";
?>