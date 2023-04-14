<?php

function categoria ($idade) {
    if ( $idade > 4 & $idade < 8){
       echo "INFANTIL A" ;
    }
    if ( $idade > 7 & $idade < 11){
        echo "INFANTIL B" ;
    }
    if ($idade > 10 & $idade < 14){
        echo "JUVENIL A";
    }
    if ($idade > 13 & $idade < 18){
        echo  "JUVENIL B";
    }
    if ($idade >= 18 ){
        echo "ADULTOS";
    }
}


$idade = $_POST['idade'] ;

$mostrar = categoria ($idade);
echo $mostrar;
echo "<br>";
echo "<a href='nadador.html' > VOLTAR </a>";

?>
