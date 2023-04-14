<?php

    function escolherMaiorNota($nota1, $nota2, $nota3){
        
        $NM = array ($nota1, $nota2, $nota3);

    }
    
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

if($nota1 && $nota2 > $nota3){
    echo "As maiores notas são: " . $nota1 . " e " . $nota2 . "</br>";

}elseif($nota1 && $nota3 > $nota3){
    echo "As maiores notas são: " . $nota1 . " e " . $nota3 . "</br>";

}else{
    echo "As maiores notas são: " . $nota2 . " e " . $nota3 . "</br>";

}

    echo "<a href='formq1.html'> Voltar </a> </br>";
    echo "<a href='index.html'> Pagina Inicial </a> </br>";

    

?>