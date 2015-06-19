<?php 
	echo '
	<div id="textoConteudo">
		<h1>SWITCH</h1>

		O comando <em>SWITCH</em> funciona de forma semelhant ao <em>IF</em> quando a intenção depende apenas do valor de uma variável. Para os casos nos 
		quais diversas situações são testadas para uma mesma variável, em vez de escrever vários comandos <em>IFS</em> aninhados (por meio de uso de blocos <em> ELSE IF</em>) 
		podemos uilizar o <em>SWITCH</em> para executar códigos de acod cm o valor da variáveç. A sintaxe do comando <em>SWITCH</em> é o seguinte:<br /><br />
		
		switch( < variável > ){<br /><br />
			
			case < valor_1 >:<br />
			/*Código a ser executado*/<br />
			break;<br /><br />

			case < valor_n >:<br />
			/*Código a ser executado*/<br />
			break;<br /><br />

			default:<br />
			/*Código a ser executado*/<br />
			break;<br /><br />

		}

		<br /><br />

		Assim como o comando <em>IF</em>, o comando <em>SWITCH</em> coéum bloco de código opconal, para ser executado no caso de nenhuma das opções serem satisftas, 
		que é o bloco <em>DEFAULT</em>. Note que para cada bloco do comando <em>SWITCH</em> é informado um comando <em>BREAK</em>,responsavel por interromper a execução 
		do código do bloco em seu final, já que para o comando <em>SWITC</em> não devem ser aplicados chaves { } para sus blocos internos, mesmo os com mais de um comando. 
		Neste caso ao entrar em um bloco de código, o mesmo é executado até encontrar um <em>BREAK</em>. Caso contrário, os códigos dos blocos seguintes também são executados, 
		mesmo que suas condições não sejam satisfeitas.

		<br /><br />

		
	';

	echo "Resultado: <br /><strong>"; include('downloadCodigos/01_estudo/09_aula/switch.php');
	echo "</strong> <br /><br /><a href='http://127.0.0.1:81/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/09_aula/switch.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>