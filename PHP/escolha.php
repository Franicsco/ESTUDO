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
	else if($escolha == "operadoresCondicionais"){
		include ('estudo01/06_OperadoresCondicionais.php');
	}
	else if($escolha == "operadoresLogicosBasicos"){
		include ('estudo01/07_OperadoresLogicosBasicos.php');
	}
	else if($escolha == "if"){
		include ('estudo01/08_if.php');
	}
	else if($escolha == "switch"){
		include ('estudo01/09_switch.php');
	}
	else if($escolha != "historia"){
	include ('historiaPHP/historia.php');
	}

?>