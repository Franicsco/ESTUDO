<?php 
	echo '
	<div id="textoConteudo">
		<h1>OPERADORES MATEMÁTICOS ( = . + - ++ -- * / % E OUTROS)</h1>

		Sabendo como representar valores em PHP, o próximo passo é realizar operações com tais valores, sejam
		eles numéricos ou trxtos. Os principais operadores disponíveis no PHP são:
		<br /><br />

		<table>
			<tr>
				<th width="150" align="left">Operador</th>
				<th align="left">Descrição</th>
			</tr>

			<tr>
				<td> = </td>
				<td>Atribui o valor de sua direita à variavel em seu lado esquerdo.</td>
			</tr>

			<tr>
				<td> . </td>
				<td>Concatena dois valores de formato texto (String).</td>
			</tr>

			<tr>
				<td> + </td>
				<td>Soma dois valores numéricos.</td>
			</tr>

			<tr>
				<td> - </td>
				<td>Subitrai dois valores numéricos.</td>
			</tr>

			<tr>
				<td> ++ </td>
				<td>Incrementa em 1 o valor de variável numérica à sua esquerda.</td>
			</tr>

			<tr>
				<td> -- </td>
				<td>Decrementa em 1 o valor de variável numérica à sua esquerda.</td>
			</tr>

			<tr>
				<td> * </td>
				<td>Multiplica dois valores numéricos.</td>
			</tr>

			<tr>
				<td> / </td>
				<td>Divide dois valores numéricos.</td>
			</tr>

			<tr>
				<td> % </td>
				<td>Obtém o resto da divisão entre dois valores numéricos.</td>
			</tr>

			<tr>
				<td> .= </td>
				<td>Concatena à variável à sua esquerda o valor apresentado em sua direita.</td>
			</tr>

			<tr>
				<td> += </td>
				<td>Soma à variável à sua esquerda o valor apresentado em sua direita.</td>
			</tr>

			<tr>
				<td> -= </td>
				<td>Subtrai da variável à sua esquerda pelo valor apresentado em sua direita.</td>
			</tr>

			<tr>
				<td> *= </td>
				<td>Multiplica a variável à sua esquerda pelo valor apresentado em sua direita.</td>
			</tr>

			<tr>
				<td> /= </td>
				<td>Divide à variável à sua esquerda pelo valor apresentado em sua direita.</td>
			</tr>

			<tr>
				<td> %= </td>
				<td>Atribui à variável da esquerda o resto de sua divisão pelo valor apresentado em sua direita.</td>
			</tr>

		</table>


		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/05_aula/operadoresMatematicos.php');
	echo "</strong> <br /><a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/05_aula/operadoresMatematicos.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>