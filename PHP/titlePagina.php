<?php 

@$escolha = $_GET['escolhaMenu'];

if($escolha == "historia"){
		echo "História PHP";
	}
	else if($escolha == "hellow"){
		echo "Hellow Word";
	}
	else if($escolha != "historia"){
	echo "História PHP";
	}

?>