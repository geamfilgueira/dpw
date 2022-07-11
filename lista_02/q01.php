<?php

    $a = array(34, 6, 7, 8, 10, 2);
    $b = array(1, 2, 7, 3, 10, 1);
   
    for($i=0; $i<6; $i++){
        if($a[$i] == $b[$i]){
            $c[$i] = $a[$i];
        }else{
            $c[$i] = -1;
        }
    }
    echo "Vetor C | ";
    foreach($c as $resultado){
        echo $resultado . " | ";
    }
    echo "<br>Vetor C | ";
    for($i=0; $i<6; $i++){
        echo $c[$i] . " | ";
    }
    

?>