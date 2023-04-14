<?php


$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];


function escolheNota($n1,$n2,$n3){

$a= array($n1,$n2,$n3);
for($i=0;$i<3;$i++){

    if($i==0){

        $maior= $a[$i];
        $menor= $a[$i];

    }
    else if($i>$maior){
        $maior= $a[$i];

    }
    else if($i<$menor){

        $menor= $a[$i];
    }


}
for($i=0;$i<3;$i++){

    if($a[$i]!=$maior&&$a[$i]!=$menor){

        $meio= $a[$i];

    }

}

$b= array($maior, $meio);
return $b;

}



function calculaMedia($n1,$n2,$n3){

    $c= escolheNota($n1,$n2,$n3);
    $media= ($c[0]+$c[1])/2;

    if($media>=7){

      return "aprovado!! sua media foi  " . $media;

    }
    else {

        return "reprovado!! sua media foi  " . $media;

    }
    

    }

    $d=  calculaMedia($n1,$n2,$n3);
    echo $d;
echo "<a href= 'q1.html'> Voltar ao form </a>";

?>