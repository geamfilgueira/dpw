<?php

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];

$a= array($q1,$q2,$q3,$q4,$q5);

function pericia ($a){
$j=0;
$k=0;

for($i=0;$i<5;$i++){
   if($a[$i]=="sim"){
    $j++;
   }
   else{
   $k++;
   }

}

if($j==2){
    return "suspeito";

 }
else if($j>2&&$j<5){
    return "cúmplice";

}
else if($j==5){
    return "assassino";

}
else{
    return "inocente";
}


}


$re= pericia($a);
echo $re;

echo "<a href= 'q4.html'> Voltar ao form </a>";


?>