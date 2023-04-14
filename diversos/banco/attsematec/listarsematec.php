<title> Lista de Turmas</title>
<h1> Lista de Turmas </h1>
<?php
$con = mysqli_connect("localhost", "root", "P4ysanduu!", "Semanacul");
$result = mysqli_query($con, "select * from sematec");

    echo "<table border='4'>";
        echo "<tr>";
        echo "<th>" . "ID da Turma" . "</th>";
        echo "<th>" . "Nome da Turma" . "</th>";
        echo "<th>" . "Nota 1" . "</th>";
        echo "<th>" . "Nota 2" . "</th>";
        echo "<th>" . "Nota 3" . "</th>";
        echo "<th>" . "Media" . "</th>";
        echo "<th>" . "Data de apresentacao" . "</th>";
        echo "</tr>";
        while($linha=mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $linha['id_turma'] . "</td>";
                echo "<td>" . $linha['nome_guerra'] . "</td>";
                echo "<td>" . $linha['nota1'] . "</td>";
                echo "<td>" . $linha['nota2'] . "</td>";
                echo "<td>" . $linha['nota3'] . "</td>";
                echo "<td>" . $linha['media'] . "</td>";
                echo "<td>" .  $linha['data_ap'] . "</td>";
            echo "</tr>";
        }
    echo "</table>";
        echo "<br>";
        echo "<br>";
    echo "-> <a href='sematec.html'> Volte para area de cadastro </a>", "<br>";
    echo "-> <a href='index.html'> Volte para a pagina incial </a>";

// echo "<table border='2'>";
//     echo "<tr>";
//     echo "<th> ID </th>";
//     echo "<th> Nome das turmas </th>";
//     echo "<th> Nota 1 </th>";
//     echo "</tr>";

//     echo "<tr>";

//         echo "<td>";
// while($linha=mysqli_fetch_array($result)){
    
//     echo $linha['id_turma'] . "<br>";
// }
//         echo "</td>";

//         echo "<td>";
// while($linha2=mysqli_fetch_array($result)){
//     echo $linha2['nota1'] . "<br>"; 
    
// }
//         echo "</td>";

//     echo "</tr>";

// echo "</table>";
?>