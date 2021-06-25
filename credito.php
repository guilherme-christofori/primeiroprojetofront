<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.::Programação Web::.</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="topo">
		<img src="img/topo_aula10.png" alt="topo">
	<div>
	<br>	
	<h1>TECTREINAMENTOS - TRATAMENTO DE DADOS COM PHP<h1><hr><br>	

<div class= "pesquisa">
	<h6> Aluno Guilherme Gomes
</div>

<div class="conteudo">
	<?php

		$nome = $_POST['nome'];
		$renda = $_POST['renda'];

		echo "Olá $nome muito obrigado por seu contato. ";
		if($renda>=2000){
			echo "Parabéns, seu crédito está <Strong>aprovado</Strong><br>";
		}elseif($renda<2000)
			echo"Infelizmente neste momento não poderemos conceder crédito, clique em voltar para acessar a página principal<br>";



	?>
	<br>
	<a href="index.html"> << voltar<a><br>

<div>

<div class="rodape">
	<h2>TECTREINAMENTOS - PROGRAMAÇÃO WEB COM PHP<h2><br>
	<h2>PÁGINA DE TRATAMENTO DE DADOS<h2>
</div>
<footer>
	<h3>Todos os direitos reservados - Desenvolvido por Guilherme Gomes<h3>
</footer>	



</body>
</html>