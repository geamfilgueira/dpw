<?php

function Media($nota1, $nota2, $nota3){

        $media = ($nota1 + $nota2 + $nota3) / 3;
        return $media;
}

function inserirBanco($id, $nome, $nota1, $nota2, $nota3, $media, $data){

    $con = mysqli_connect("localhost", "root", "P4ysanduu!", "Semanacul");
    $insert = "INSERT INTO Sematec values($id, '$nome', $nota1, $nota2, $nota3, $media, '$data');";
    $result = mysqli_query($con, $insert);
    
    if($result){
        mysqli_close($con);
        echo "Dados inseridos com sucesso!", "<br>";
        echo "-> <a href='listarsematec.php'> Listar as turmas </a>";
        return true;
    }else{
        return false;
    }
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$data = $_POST['apres'];


$media = Media($nota1, $nota2, $nota3);
$inserir = inserirBanco($id, $nome, $nota1, $nota2, $nota3, $media, $data);




?>