<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="witch=device-witch, initial-scale=1">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<title>Consumo de Combustível</title>
</head>
<body>
	<main>
		<?php
		#require_once 'conexao.php'

		#$resultado = pg_query($dbconn, "SELECT * FROM sgdb.TB_USUARIO");
		#while($linha = pg_fetch_array($resultado))
		#	echo "<tr><td>".$linha[ID]."</td><td>".$linha[NOME]."</td><td>".$linha[EMAIL]."</td></tr>";

		?>
		<div class="bg-info p-2">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que serão
				gastos com combustível durante uma viagem</p>
				<ul>
					<li><b>Álcool</b></li>
				</ul>
			</div>
		</div>

		<div class="bg-light p-2">
			<h2 class="text-center">Cálculo do valor (R$) do consumo</h2>
			<div class="container">
				<form action="calculo.php" method="POST">
					<table class="table">
						<tbody>
							<tr>
							<td><label for="distancia">Distância em Quilômetros a ser percorrida</label></td>
							<td><input type="number" class="campoTexto" name="distancia" required/><br></td>
							</tr>
							<tr>
							<td><label for="combustivel">Valor do Combustível</label></td>
							<td><input type="float" class="campoTexto" name="combustivel" required/><br></td>
							</tr>
							<tr>
							<td><label for="autonomia">Consumo de Combustível do Veículo (Km/l)</label></td>
							<td><input type="number" class="campoTexto" name="autonomia" required/></td>
							</tr>
						</tbody>
					</table>
					<div class="text-center">	
					<button class="btn btn-primary" type="submit">Calcular</button>
					</div>
				</form>
			</div>
		</div>

		<div class="text-center bg-danger p-2">
			<h2>Conectar ao Banco de dados</h2>
			<a href="conexao.php">
			<button class="btn btn-success">Conectar</button>
			</a>
		</div>
	</main>
</body>
</html>
