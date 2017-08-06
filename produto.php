<!DOCTYPE html>
<html>
<head>
	<title> Mirror Fashion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width"><!---->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo.css">
	<!--<link rel="stylesheet" href="css/mobile.css">media="(max-width:400px")-->
	<link rel="stylesheet" href="css/produto.css">
</head>

<body>
	<?php include("cabecalho.php"); ?>
	<div class="container">
		<div class="produto">
			<h1> Fuzzy Cardigan </h1>
			<p>por apenas R$129,00</p>

			<form action="checkout.php" method="post">
				<input type="hidden" name="nome" value="Fuzz Cardigan">
				<input type="hidden" name="preco" value="129,00">
				<fieldset class="cores">
					<legend>Escolha a cor:</legend>
					<input type="radio" name="cor" value="verde"id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto2-verde.png"alt="verde">
					</label>
					<input type="radio" name="cor" value="rosa"id="rosa" >
					<label for="rosa">
						<img src="img/produtos/foto2-rosa.png"alt="rosa">
					</label>
					<input type="radio" name="cor" value="azul"id="azul">
					<label for="azul">
						<img src="img/produtos/foto2-azul.png"alt="azul">
					</label>

				</fieldset>

				<fieldset class="tamanhos">

					
					<legend> Escolha o tamanho:</legend>
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">

					<output for="tamanho" name="valortamanho">42</output>

				</fieldset> 

				<input type="submit" class="comprar" value="Comprar">
				<div class="detalhes">
					<h2>Detalhes do produto</h2>
					<p> Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa
						desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
						mesmo pela nossa entrega ajato.
					</p>


					<table>
						<thead>
							<tr>
								<th>Caracteristicas</th>
								<th> Detalhes</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Cardigan</td>
							</tr>
							<tr>
								<td>material</td>
								<td>algodao poliester</td>
							</tr>
							<tr>
								<td>Cores</td>
								<td>azul, rosa e verde</td>
							</tr>
							<tr>
								<td>lavagem</td>
								<td>lavar a mao</td>
							</tr>
						</tbody>
					</table>
				</div>

			</form>
		</div>
	</div>

	<?php include("rodape.php"); ?>

</body>
<script src="js/produto.js"></script>

</html>