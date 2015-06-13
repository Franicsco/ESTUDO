<?php 
	echo '
	<div id="textoConteudo">
		<h1>HELLOW WORD!!!</h1>

		O PHP apresenta mais de um comando de impressão de conteúdo, e neste primeiro momento o comando que será utilizado para tal função é o<br />
		"ECHO", que recebe um valor e exibe o conteúdo no arquivo HTML. O comando echo será abordado de forma mais detalhada adiante. Por<br />
		enquanto, o que interessa é a funcionalidade do recurso.

		
		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/01_aula/helloWord.php');
	echo "</strong> <br /><a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/01_aula/helloWord.rar'> Download do Código-fonte:  </a><br /><br />";
?>

<?php
	echo'
		A primeira linha do código-fonte 2.1 indica que comandos PHP serão executado dessa tag até seu fechamento, realizado na ultima linha do exemplo, 
		por meio da expressão <strong>?></strong>. A tag inicial de abertura do códigos PHP é <strong>< ?php</strong>, mas no decorrer do arquivo, caso
		haja outros fechamentos e novas aberturas, pode ser utilizado somente <strong>< ?</strong>, indicando a reabertura de blocos PHP dependendo do
		sistema operacional utilizado.<br /><br />
		<hr />
		<br /><br />

		O código-fonte 2.2 será impresso dentro de uma tag INPUT do HTML :
		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/01_aula/helloWordForm.php');
	echo "</strong><br /> <a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/01_aula/helloWordForm.rar'> Download do Código-fonte:  </a><br /><br />

	O que ocorre no código-fonte 2.2 é abertura de um campo de texto, de forma que o conteúdo desse campo(atributo value da tag INPUT). Observe
	que a caixa de texto HTML começa a ser construída na linha 3 e termina somente na linha 10. Assim como esse exemplo, milhares de outras utilizações
	podem ser construídas, integrando PHP, HTML, Javascript, dados providos de um banco de dados, de outras aplicações etc.

	";
?>

<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>