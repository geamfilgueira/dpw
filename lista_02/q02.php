<?php


    $tamanho = $_POST["tam"];


    for($i=$tamanho; $i > 0; $i--){

        
        for($j= $i ; $j > 0; $j--){

            echo $j . " ";
        }
        echo "<br>";


    }

    echo "<a href='q02.html'  > Testar novamente? </a>";

   // header('Location: q02.html');
    