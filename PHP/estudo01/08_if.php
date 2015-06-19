<?php 
	echo '
	<div id="textoConteudo">
		<h1>IF</h1>

		O comando <em>IF</em> é um comando de decisão, que com base em uma expressão lógica formada com operadores condicionais 
		e valores chega em um resultado verdadeiro ou falso, executando o seu código ou não. A sintaxe do comando IF é a seguinte:<br /><br />
		
		if ( < condicção > ){<br /><br />
			/*Código a ser executado*/<br /><br />
		}<br />
		else if ( < condição > ){<br /><br />
			/*Código a ser executado*/<br /><br />

		}<br />
		else{<br /><br />
			/*Código a ser executado*/
			<br /><br />
		}

		<br /><br />

		O primeiro passo de um comando <em>IF</em> é avaliar a expressão passada como parâmetro. No caso do resultado da expressão ser verdadeira, o bloco 
		em questão é executado. No caso de não ser verdadeiro, o códico avalia a expressão do <em>ELSE IF</em>, caso exista no comando. O <em>ELSE IF</em> 
		funciona como um segundo teste a ser realizado, definindo um novo bloco de código tratando uma segunda situação hipotética. Podem existir varios <em> ELSE IF </em> 
		em um único comando <em>IF</em>. Por fim e de forma opcional, é possível ter um único bloco <em>ELSE</em> ao final do comando. Cao nenhuma das sentenças avaliadas 
		anteriomente tenha sido satisfeitas, esse bloco é executado.		

		<br /><br />

		
	';

	echo "Resultado: <br /><strong>"; include('downloadCodigos/01_estudo/08_aula/if.php');
	echo "</strong> <br /><br /><a href='http://127.0.0.1:81/ESTUDO/PHP/estudo01/downloadCodigos/01_estudo/08_aula/if.rar'> Download do Código-fonte:  </a><br /><br />";
?>



<?php
echo '
	</div>
<br /><br /><br /><br /><br /><br />
	<div id="referencia"><strong>REFERÊNCIA:</strong> <a href="http://novatec.com.br/livros/phpmysql/" target="_blank">Construindo Aplicações em com PHP e MySQL</a></div>
	';
?>