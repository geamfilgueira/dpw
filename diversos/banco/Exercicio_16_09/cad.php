<?php

    function Media($n1, $n2, $n3){
        $media = ($n1 + $n2 + $n3)/3;
        return $media;
    }
    function addBanco($host, $user, $pass, $dbName, $nome, $n1, $n2, $n3, $media, $data){
        $con = mysqli_connect($host, $user, $pass, $dbName);
        $insert = "INSERT INTO aluno(nomeGuerra, notaAv1, notaAv2, notaAv3, media, data_ap) 
                    VALUES('$nome', $n1, $n2, $n3, $media, '$data')";
        $result = mysqli_query($con, $insert);
        if($result){
            mysqli_close($con);
            return true;
        }else{
            return false;
        }
        
    }

    $hostName = "localhost";
    $userName = "root";
    $passName = "";
    $dbName = "sematec";

    $nomeGuerra = $_POST['nome-guerra'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $data_ap = $_POST['data_ap'];
    
    $media = Media($nota1, $nota2, $nota3);

    $add = addBanco($hostName, $userName, $passName, $dbName, $nomeGuerra, $nota1, $nota2, $nota3, $media, $data_ap);

    if ($add)
        echo "ok";
    else
        echo "errp";
?>