<?php 
	echo '
	<div id="textoConteudo">
		<h1>VARIÁVEIS</h1>

		Para declarar variáveis em PHP basta utilizar o símbolo $ seguido do nome da variável a ser criada, sem utilizar espaço em branco ou 
		caracteres especiais como mostra o código-fonte 2.3. Uma variável pode conter valores no formato texto, numéricos ou 
		booleano(Verdadeiro ou Falso), referência para um objeto ou simplesmente ser nula (null).

		
		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/02_aula/variaveis.php');
	echo "</strong> <br /><a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/02_aula/variaveis.rar'> Download do Código-fonte:  </a><br /><br />";
?>

<?php
	echo'
		
		<hr />
		<br />
		<h1>ISSET</h1>
		<br />
		Para saber se uma variável está definida ou não (se foi criada durante a execução de sua aplicação) ou se uma variável com origem
		em um formulário ou requisição está disponível para uso, é possível utilizar a função isset do PHP, da seguinte forma:<br /><br />

		Sintaxe:<br />
		(bool) isset(< nome_da_variavel >)
		<br /><br />

		O código-fonte 2.4 apresenta um exemplo de uso da função <em>isset</em>. No exemplo, o primeiro comando if não exibirá sua mensagem
		(linhas 3 e 4), pois a variável em questão ainda não terá sido definida, mas o segundo comando if exibirá sua mensagem (linha 8 e 9).
		Mesmo que a variável esteja com um valor vazio, o comando <em>isset</em> indica que ela contém algum valor. O if da linha 8 somente
		não entraria em seu bloco de código caso a variável não tivesse sido criada ou se tivesse armazenando o valor <em>null</em>.
		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/02_aula/isset.php');
	echo "</strong><br /> <a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/02_aula/isset.rar'> Download do Código-fonte:  </a><br /><br />

	
	";
?>

<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>