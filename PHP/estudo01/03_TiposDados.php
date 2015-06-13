<?php 
	echo '
	<div id="textoConteudo">
		<h1>TIPOS DE DADOS</h1>

		O PHP suporta alguns tipos de dados em sua linguagem, sendo estes:
		<br /><br />

		<table>
			<tr>
				<th width="150" align="left">Tipo de dado</th>
				<th align="left">Descrição</th>
			</tr>

			<tr>
				<td>Integer</td>
				<td>Manipula valores inteiros(negativos, positivos e zero.).</td>
			</tr>

			<tr>
				<td>Double</td>
				<td>Manipula valores que contenha casas decimais (de precisão).</td>
			</tr>	

			<tr>
				<td>String</td>
				<td>Manipula textos e caracteres.</td>
			</tr>

			<tr>
				<td>Boolean</td>
				<td>Manipula os valores TRUE e FALSE, que no PHP também são representados pelo valor 1 ou vazio respectivamente.</td>
			</tr>

			<tr>
				<td>Array</td>
				<td>Manipula conjuntos de valores.</td>
			</tr>

			<tr>
				<td>Object</td>
				<td>Manipula objetos, assunto que será abordado no capítulo de orientação a objetos.</td>
			</tr>

		</table>

		<br />
		Diferentemente de algumas outras tecnologias, não é necessario vincular uma variável a um tipo de dado específicos no PHP. Isso quer
		dizer que uma variável que armazene um valor inteiro pode assumr um novo valor de outro tipo de dado, como uma string ou um objeto,
		tornando o PHP uma linguagem de tipificação muito fraca. Essa característica por um lado torna mais simples a programação, mas, por 
		outro, faz com que um valor numérico passado entre aspas para uma variável seja sempre entendido como uma string ocasionando
		resultados indesejados caso acidentalmente seja utilizado em contas matemáticas.

		<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/03_aula/tipoDados.php');
	echo "</strong> <br /><a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/03_aula/tipoDados.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>