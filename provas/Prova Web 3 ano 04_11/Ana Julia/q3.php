<?php

function Fatorial($n){
$fat=1;
for($i=1; $i <= $n; $i++){
$fat *= $i;
}
return $fat;
}

$s = $_POST['n'];

for($i=1; $i<$s; $i++){
$s += $i/fatorial($i);
}
echo $s; 

echo "<br> <a href='index.html'>Voltar</a>";
?>