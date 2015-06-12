<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php include "titlePagina.php"; ?></title>  
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>

	<body>
		
		<div id="topo">
			<div class="tituloPHP"><a href="?escolhaMenu=historia">PHP</a></div>

			<ul class="menu">
				
				<li><a href="">LINGUAGEM PHP</a>
					<ul class="submenu1">
						<li><a href="?escolhaMenu=hellow">HELLOW WORD!</a></li>
						<li><a href="">VARIÁVEIS</a></li>
						<li><a href="">VARIÁVEIS</a></li>
						<li><a href="">TIPOS DE DADOS</a></li>
						<li><a href="">CONSTANTES</a></li>
						<li><a href="">OPERADORES MATEMÁTICOS</a></li>
						<li><a href="">OPPERADORES CONDICIONAIS</a></li>
						<li><a href="">OPERADORES LÓGICOS BÁSICOS</a></li>
						<li><a href="">CONTROLE E REPETIÇÃO</a>

							<ul class="submenu2">
								<li><a href="">IF</a></li>
								<li><a href="">SWITCH</a></li>
								<li><a href="">FOR</a></li>
								<li><a href="">FOREACH</a></li>
								<li><a href="">WHILE</a></li>
								<li><a href="">DO WHILE</a></li>
								<li><a href="">BREAK</a></li>
								<li><a href="">CONTINUE</a></li>
								<li><a href="">GOTO</a></li>
								<li><a href="">EXIT(ANTIGO DIE)</a></li>
							</ul>
						</li>
						<li><a href="">NÚMEROS E STRINGS</a></li>
						<li><a href="">DATA E HORA</a></li>
						<li><a href="">FUNÇÃO(FUNCTION, RETURN)</a></li>
						<li><a href="">INCLUDE</a></li>
						<li><a href="">SUPERVARIÁVEIS DO PHP</a>
							<ul class="submenu2">
								<li><a href="">VARIÁVEL $_SERVER</a></li>
							</ul>	
						</li>
						<li><a href="">LEITURA E GRAVAÇÃO ARQUIVOS</a>
							<ul class="submenu2">
								<li><a href="">ABERTURA (FOPEN)</a></li>
								<li><a href="">LEITURA (FREAD)</a></li>
								<li><a href="">GRAVAÇÃO (Fs)</a></li>
								<li><a href="">EXEMPLO COMPLETO</a></li>
							</ul>
						</li>
						<li><a href="">REDIRECIONAMENTO (HEADER)</a></li>
					</ul>
				</li>

				<li><a href="####">MENU</a>
					<ul class="submenu1">
						<li><a href="">SUBMENU1</a></li>
						<li><a href="">SUBMENU2</a></li>
					</ul>
				</li>



			</ul>	

			<div class="btSair"><a href="http://127.0.0.1/ESTUDO/"> SAIR</a></div>
		</div>

		<div id="conteudo">
			<?php include ('escolha.php');?>
		</div>

	</body>
</html>