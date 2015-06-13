<?php 
	echo '
	<div id="textoConteudo">
		<h1>CONSTATES (FUNÇÃO DEFINE)</h1>

		É possível definir constantes em códigos PHP. Constantes são valores que não sofre alterações na execução de seu 
		códigos, isto é, valores de referências que serão utilizados em modo de consulta. Um exemplo clássico de constantes 
		é o valor matemático PI, sendo possível definir seu valor como uma constante no código e usá-lo em operações matemáticas.
		<br ><br />

		Diferentemente das variáveis, as constantes não utilizam o operador $. Para definir uma constante, é necessário usar a 
		função <em>define</em>, como na sintaxe a seguir:
		<br /><br />

		(bool) define(< nome_constante >, < valor >[, < nao_sensitive >])

		<br /><br />

		Além do nome e valor, é possível habilitar para que a escrita da variável represente sempre o mesmo valor (parâmetro opcional), 
		independentemente do uso de maiúsculas ou minúsculas (case sensitive). Depois de uma constante ser definida, ela não poderá 
		receber outro valor durante seu ciclo de vida. Caso haja uma tentativa de alocar um novo valor à constante, ela não o armazenará.

				<br /><br />
	';

	echo "Resultado: <strong>"; include('downloadCodigos/01_estudo/04_aula/constantes.php');
	echo "</strong> <br /><a href='http://127.0.0.1/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/04_aula/constantes.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>