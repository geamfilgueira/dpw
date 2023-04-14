<?php


$n1=$_POST['n1'];


function fat ($n){
   $fat=1;

for($i=$n;$i>1;$i--){

 $fat= $fat*$i;

}
return $fat;

}



function soma ($n){
$soma=0;
for($i=1;$i<=$n;$i++){

$soma=$soma+($i/fat($i));
   
   }
   $soma++;

   echo $soma;

    }

   soma($n1);

echo "<a href= 'q3.html'> Voltar ao form </a>";

?>