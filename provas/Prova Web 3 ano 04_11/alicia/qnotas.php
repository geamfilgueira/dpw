<?php

function escolhermaiornota ($nota1,$nota2,$nota3){
$maior = 0;
$segundo = 0;

if($nota1>=$nota2&&$nota1>=$nota3) {
$maior = $nota1;

}
 
else if ($nota2>=$nota1&&$nota2>=$nota3) {
   $maior = $nota2;
}


else if ($nota3>=$nota1&&$nota3>=$nota2) {
   $maior = $nota3;
}

if($maior == $nota1) {
   if ($nota2>$nota3) {
      $segundo = $nota2;
   }
   
   else{
      $segundo = $nota3;
   }
}

else if ($maior == $nota2) {
   if($nota1>$nota3) {
      $segundo = $nota1;
   }
   else{
      $segundo = $nota3;
   }
}

else if ($maior == $nota3) {
   if($nota2>$nota1) {
      $segundo = $nota2;
   }
   else{
      $segundo = $nota1;
   }
}

$maiores = [$maior, $segundo];
return $maiores;

}

$notas1 = escolhermaiornota($_POST['nota1'], $_POST['nota2'], $_POST['nota3']) ;

$media = ($notas1[0]+$notas1[1]/2);

if($media >= 7) {
   echo "Aluno aprovado" ;
  }
  
 else {
   echo "Aluno em recuperacao" ;
  }
  




?>