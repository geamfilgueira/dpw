<?php
function nadador($idade){

if($idade>=5 && $idade<=7){
$categoria = "Infantil A";
}
elseif($idade>=8 && $idade<=10){
$categoria = "Infantil B";
}
elseif($idade>=11 && $idade<=13){
$categoria = "Juvenil A";
}
elseif($idade>=14 && $idade<=17){
$categoria = "Juvenil B";
}
elseif($idade>=18){
$categoria = "Adulto";
}

return $categoria;

}

$idade = $_POST['idade'];

echo $categoria; 

echo "<a href='index.html'>Voltar</a>";
?>