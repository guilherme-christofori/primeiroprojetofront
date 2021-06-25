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
		<h1>ORÇAMENTO<h1><hr><br>	

	<div class="conteudo">
		<?php

			$data = $_POST['data'];
			$garantia = $_POST["garantia"];
			$servico = $_POST["servico"];
			$aparelho = $_POST["aparelho"];
			$cliente = $_POST["cliente"];

			echo "Detalhes do orçamento: <br>";
			echo "Data $data Tempo de garantia após a entrega: $garantia meses<br>
			";
			echo "Aparelho para manutenção: $aparelho<br>";

			echo "Serviço a ser executado: $servico<br><br>";

			switch ($servico) {
				case 'Formatação':
					echo "O valor total será de R$ 70,00 a mão de obra mais R$ 50,00 de equipamentos, totalizando R$ 120,00";
					break;
				case 'Troca de Peças':
					echo "O valor total será de R$ 100,00 a mão de obra mais R$ 50,00 de equipamentos, totalizando R$ 150,00";
					break;
				case 'Outros':
					echo "O valor total será de R$ 150,00 a mão de obra mais R$ 50,00 de equipamentos, totalizando R$ 200,00";
					break;
					default:
					echo "Infelizmente não é possível realizar este serviço no momento.";
					break;

			
			}

				echo "<br><br>Declaro estar de acordo com os valores e informações acima descritos<br><br> $cliente";

			?>
		<br>

		<p>Assinatura:___________________________________________</p><br>
		<p>Data:___/___/___</p><br>
		<p>Ao assinar você concorda com todos os termos de serviço e garantia.</p><br>
		<form>
			<input type="buttom" value="Imprimir Orçamento" onclick="window.print()">
		</form>

		<a href="index.html"> << voltar<a><br>

	<div>

	<footer>
		<h3>Todos os direitos reservados - Desenvolvido por Guilherme Gomes<h3>
	</footer>	



</body>
</html>