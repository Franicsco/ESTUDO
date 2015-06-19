<?php 
	echo '
	<div id="textoConteudo">
		<h1>OPERADORES LÓGICOS BÁSICOS ( ==, >, <, != E OUTROS)</h1>

		Os operadores lógicos permitem montar expressões questionando duas ou mais expressões condicionais, com o objetivo de chegar em um 
		resultado final. No tópico anterior as questões eram se um valor era menor, igual ou maior que outro. Neste, essas questões são 
		integradas e expandidas para expressões no formato: o valor é menor que <strong>X</strong> e maior que <strong>Y</strong> ao mesmo tempo?<br /><br />

		Os opreradores lógicos são
		<br /><br />

		<table>
			<tr>
				<th width="150" align="left">Operador</th>
				<th align="left">Descrição</th>
			</tr>

			<tr>
				<td> ! </td>
				<td>Nega a condição informada (inverte seu resultado lógico).</td>
			</tr>

			<tr>
				<td> && </td>
				<td>Retorna verdadeiro se ambas as condições da esquerda e da direita forem satisfeitas.</td>
			</tr>

			<tr>
				<td> || </td>
				<td>Retorna verdadeiro se pelo menos uma das condições (da esquerda ou da direita) for satisfeita.</td>
			</tr>
			
			
			
		</table>

		<br /><br />

		
	';

	echo "Resultado: <br /><strong>"; include('downloadCodigos/01_estudo/07_aula/operadoresLogicosBasicos.php');
	echo "</strong> <br /><a href='http://127.0.0.1:81/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/07_aula/operadoresLogicosBasicos.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>