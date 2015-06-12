<?php

@$escolha = $_GET['escolhaMenu'];

if($escolha == "historia"){
		include ('historiaPHP/historia.php');
	}
	else if($escolha == "hellow"){
		include ('estudo01/01_Hellow.php');
	}
	else if($escolha != "historia"){
	include ('historiaPHP/historia.php');
	}

?>