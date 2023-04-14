<?php
	$x = $_POST['x'];
	$y = $_POST['y'];
	$z = $_POST['z'];
	
	if($x<$y+$z) {
	 echo "Eh triangulo<br>";
	 }
	 
	 if($x==$y && $x==$z && $y==$z) {
		 echo "Triangulo equilatero";
	 }
	 
	
	 
	 else if($x!=$y && $x!=$z && $y!=$z){
		 echo "Triangulo Escaleno";
	 }	 

	 else 
		 echo "Triangulo isosceles";
?>