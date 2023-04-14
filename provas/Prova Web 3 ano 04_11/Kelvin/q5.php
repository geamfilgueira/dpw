<?php

    function CalcularTempAno($temp1, $temp2, $temp3, $temp4, $temp5, $temp6, $temp7, $temp8, $temp9, $temp10, $temp11, $temp12){
        
        $tempf = array ($temp1, $temp2, $temp3, $temp4, $temp5, $temp6, $temp7, $temp8, $temp9, $temp10, $temp11, $temp12);

    }
    
    $tempf = ($temp1 + $temp2 + $temp3 + $temp4 + $temp5 + $temp6 + $temp7 + $temp8 + $temp9 + $temp10 + $temp11 + $temp12) / 12;

    $temp1 = $_POST['temp1'];
    $temp2 = $_POST['temp2'];
    $temp3 = $_POST['temp3'];
    $temp4 = $_POST['temp4'];
    $temp5 = $_POST['temp5'];
    $temp6 = $_POST['temp6'];
    $temp7 = $_POST['temp7'];
    $temp8 = $_POST['temp8'];
    $temp9 = $_POST['temp9'];
    $temp10 = $_POST['temp10'];
    $temp11 = $_POST['temp11'];
    $temp12 = $_POST['temp12'];

        echo "A temperatura anual é: " . $tempf . "</br>";

        echo "Janeiro: " . $temp1 . "<br>";
        echo "Fevereiro: " . $temp2 . "</br>";
        echo "Março: " . $temp3  . "</br>";
        echo "Abril: " . $temp4 . "</br>";
        echo "Maio: " . $temp5 . "</br>";
        echo "Junho: " . $temp6  . "</br>";
        echo "Julho: " . $temp7 . "</br>";
        echo "Agosto: " . $temp8 . "</br>";
        echo "Setembro: " . $temp9  . "</br>";
        echo "Outubro: " . $temp10 . "</br>";
        echo "Novembro: " . $temp11 . "</br>";
        echo "Dezembro: " . $temp12  . "</br>";

    

?>