<?php 
    function notamaior ($n1, $n2, $n3){
        $maior = 0;
        $segundo = 0;
        if($n1 >= $n2 && $n1 >= $n3){
            $maior = $n1;
        }
        else if($n2 >= $n1 && $n2 >= $n3){
            $maior = $n2;
        }
        else if($n3 >= $n1 && $n3 >= $n2){
            $maior = $n3;
        }

        if($maior == $n1){
            if($n2 > $n3){
                $segundo = $n2;
            }
            else{
                $segundo = $n3;
            }
        }
        else if($maior == $n2){
            if ($n1 > $n3){
                $segundo = $n1;
            }
            else{
                $segundo = $n3;
            }
        }
        else if($maior == $n3){
            if($n2 > $n1) {
                $segundo = $n2;
            }
            else{
                $segundo = $n1;
            }
        }
        $maiores = [$maior . $segundo];
        return $maiores;
    }

    $notas = notamaior ($_POST ['n1'], $_POST ['n2'], $_POST['n3']);

    $media = ($notas[0] + $notas[1])/2;
    if ($media >= 7){
        echo "parabens, voce foi aprovado";
    }
    else{
        echo "voce esta reprovado";
    }

?>