<?php
  $n1 = $_POST['valor1'];
  $n2 = $_POST['valor2'];
  
 if($n2!=0) {
	 echo "O valor da divisao eh: " .($n1/$n2);
 }

else 
	echo "Nao eh possivel";

  
 
  
?>