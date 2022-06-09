<?php

$nome       = $_POST['nomepiloto'];
$distancia  = $_POST['distancia'];
$tempo      = $_POST['tempo'];

$vm = $distancia/$tempo;

echo "A velocidade media do " . $nome . " foi " 
                                    . $vm . " km/h" ;

echo " <br/> <a href='formq01.html'> Voltar </a>";

?>