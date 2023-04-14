<?php

function escolhemaiornota($nota1, $nota2, $nota3){
$maior = 0;
$smaior = 0; 
if($nota1 >= $nota2 && $nota1 >= $nota3){
$maior= $nota1;
}
elseif($nota2 >= $nota1 && $nota2 >= $nota3){
$maior= $nota2;
}
elseif($nota3 >= $nota1 && $nota3 >= $nota2){
$maior= $nota3;
}

if($maior == $nota1){
if($nota2>$nota3){
    $smaior=$nota2;
}
}else{
    $smaior=$nota3;
}
elseif($maior == $nota2){
if($nota1>$nota3){
    $smaior=$nota1;
}
}else{
    $smaior=$nota3;
}
elseif($maior == $nota3){
if($nota2>$nota1){
    $smaior=$nota2;
}
}else{
    $smaior=$nota1;
}

$maiores = [$maior, $smaior];
return $maiores;
}
$n1 = maioresNotas( $_POST['nota1'], $_POST['nota2'], $_POST['nota3']);
$media = ($n1[0] + $n1[1]/2);

if($media>=7){
    echo "Aprovado";
}else {
    echo "Reprovado";
}

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

echo "<a href='index.html'>Voltar</a>";
?>