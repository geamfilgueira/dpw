<?php

$vetorx = array($_POST['v1'],$_POST['v2'],$_POST['v3'],$_POST['v4'],$_POST['v5'],$_POST['v6'],$_POST['v7'],$_POST['v8'],$_POST['v9'],$_POST['v10']);


for($i=0, $i<9, i++){
$vetory = array ($vetorx[$i]);
	if($i==%2){
		$vetory * 5;
	}else{
		($vetorx + 1) * 2;
}
?>