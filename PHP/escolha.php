<?php

@$escolha = $_GET['escolhaMenu'];

if($escolha == "historia"){
		include ('historiaPHP/historia.php');
	}
	else if($escolha == "hellow"){
		include ('estudo01/01_Hellow.php');
	}
	else if($escolha == "variavel"){
		include ('estudo01/02_Variaveis.php');
	}
	else if($escolha == "tipoDados"){
		include ('estudo01/03_TiposDados.php');
	}
	else if($escolha == "constantes"){
		include ('estudo01/04_Constantes.php');
	}
	else if($escolha == "operadoresMatematicos"){
		include ('estudo01/05_OperadoresMatematicos.php');
	}
	else if($escolha != "historia"){
	include ('historiaPHP/historia.php');
	}

?>