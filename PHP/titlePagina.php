<?php 

@$escolha = $_GET['escolhaMenu'];

if($escolha == "historia"){
		echo "História PHP";
	}
	else if($escolha == "hellow"){
		echo "Hellow Word";
	}
	else if($escolha == "variavel"){
	echo "Variáveis";
	}
	else if($escolha == "tipoDados"){
	echo "Tipo de Dados";
	}
	else if($escolha == "constantes"){
	echo "Constantes";
	}
	else if($escolha == "operadoresMatematicos"){
	echo "Operadores Matemáticos";
	}
	else if($escolha == "operadoresCondicionais"){
	echo "Operadores Condicionais";
	}
	else if($escolha == "operadoresLogicosBasicos"){
	echo "Operadores Lógicos Básicos";
	}
	else if($escolha == "if"){
	echo "IF";
	}	
	else if($escolha == "switch"){
	echo "SWITCH";
	}
	else if($escolha != "historia"){
	echo "História PHP";
	}

?>