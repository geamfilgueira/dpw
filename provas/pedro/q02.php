<?php
	$nome = $_POST['nome']; 
	$endereco = $_POST['endereco']; 
	$telefone = $_POST['telefone']; 
	$email =  $_POST['email'];
	$vetor = array($nome,$endereco,$telefone,$email);

	echo "Nome: " .$nome. "<br>";
	echo "Endereco: " .$endereco. "<br>";
	echo "Telefone: " .$telefone. "<br>";
	echo "Email: " .$email. "<br>";
?>