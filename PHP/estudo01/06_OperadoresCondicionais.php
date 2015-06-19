<?php 
	echo '
	<div id="textoConteudo">
		<h1>OPERADORES CONDICIONAIS ( ==, >, <, != E OUTROS)</h1>

		Os operadores condicionais são os que permitem que decisões sejam tomadas em seus codigos-fontes, quando 
		utilizados de forma integrada com o s comandos de decisão, que serão acordados logo adiante. O primeiro passo é 
		conhecer os operadores condicionais e suas funcionalidades, os quais são apresentados a seguir:
		<br /><br />

		<table>
			<tr>
				<th width="150" align="left">Operador</th>
				<th align="left">Descrição</th>
			</tr>

			<tr>
				<td> == </td>
				<td>Compara se dois valores têm o mesmo valor.</td>
			</tr>

			<tr>
				<td> === </td>
				<td>Compara se dois valores são idênticos</td>
			</tr>

			<tr>
				<td> != </td>
				<td>Compara se dois valores são diferentes</td>
			</tr>

			<tr>
				<td> < > </td>
				<td>Equivalente a !=</td>
			</tr>

			<tr>
				<td> < </td>
				<td>Compara se o valor da direita é menor que o da esquerda.</td>
			</tr>

			<tr>
				<td> > </td>
				<td>Decrementa em 1 o valor de variável numérica à sua esquerda.</td>
			</tr>

			<tr>
				<td> <= </td>
				<td>Compara se o valor da direita é menor ou igual ao da esquerda.</td>
			</tr>

			<tr>
				<td> >= </td>
				<td>Compara se o valor da direita é maior ou igual ao da esquerda.</td>
			</tr>

			
		</table>

		<br /><br />

		Entre os operadores apresentados, vale a pena citar a diferença entre o <strong>(==)</strong> e <strong>(===)</strong>. o primeiro compara 
		se dois valores são equivalentes, independentemente do tipo de dado, enquanto o segundo compara se os valores são idênticos. Por exemplo, o número inteiro 
		45 e o número real 45.0 são equivalentes, mas não são idênticos.


		<br /><br />
	';

	echo "Resultado: <br /><strong>"; include('downloadCodigos/01_estudo/06_aula/operadoresCondicionais.php');
	echo "</strong> <br /><a href='http://127.0.0.1:81/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/06_aula/operadoresCondicionais.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>