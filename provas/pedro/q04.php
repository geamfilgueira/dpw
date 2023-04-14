<?php
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $n3 = $_POST['n3'];
  $n4 = $_POST['n4'];
  $n5 = $_POST['n5'];
  $n6 = $_POST['n6'];
  $n7 = $_POST['n7'];
  $n8 = $_POST['n8'];
  $n9 = $_POST['n9'];
  $n10 = $_POST['n10'];
  
  $vetor = array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);
  

for($i=0;$i<10;$i++){
	
	if($vetor[0] > $vetor[$i]) {
		echo "Maior: " .$vetor[0]. "<br>";
	}
	
	else
		echo "Menor: " .$vetor[0]. "<br>";
}


  
?>