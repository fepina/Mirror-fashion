<!DOCTYPE html>
<html>
<head>
	<title> Mirror Fashion- Check-out</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/checkout.css">
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			

			<h1 >Ótima escolha</h1>

			<p>Obrigada por comprar na Mirror Fashion.
				Preencha os dados para efetivar a compra.
			</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4" "col-lg-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div>
					<div class="panel-body">
						<dl>

							<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbanil img-responsive hidden-xs">
							<dt>Produto:</dt>
							<dd><?= $_POST['nome']?></dd>

							<dt>Preço:</dt>
							<dd id="preco">R$<?= $_POST['preco']?></dd>

							<dt>Cor:</dt>
							<dd><?= $_POST['cor']?></dd>

							<dt>Tamanho:</dt>
							<dd><?= $_POST['tamanho']?></dd>
						</dl>

							<div class="form-group"><!-- div qt-->
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div><!-- fecha div qt-->

							<div class="form-group"><!-- div total-->
								<label for="total">Total</label>
								<output for="qt preco" id="total" class="form-control">
									<?= $_POST["preco"] ?>

							</div><!-- fecha div total-->

					</div>
				</div>
			</div>

			<form class="col-sm-8" "col-lg-9">
				<div class="row">

					<fieldset class="col-md-6">

						<legend> Dados Pessoais</legend>


						<div class="form-group">
							<label for="nome">Nome completo</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" autofocous required>

						</div>

						<div class="email">
							<label for="email">Email</label>
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="email" name="email" placeholder="email">
							</div>

						</div>

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="cpf" data-mask="999.999.999.99" class="form-control" id="email" name="cpf" placeholder="000.000.000.00" required>

						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" value="sim" name="spam" checked>
								Quero receber spam da mirror fashion
							</label>

						</div>
					</fieldset>

					<fieldset class="col-md-6">
						<legend> Cartao de credito</legend>
						<div class="form-group">
							<label for="numero-cartao">Numero CVV</label>
							<input type="text" data-mask="9999 9999 9999 -999" class="form-control" id="numero-cartao" name="numero-cartao">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao">Bandeira</label>
							<select name=""bandeira-cartao" " class="form-control" id="bandeira-cartao">
								<option value="master">MasterCard</option>
								<option value="visa">VISA</option>
								<option value=amex"America express">American express</option>
							</select>
						</div>


						<div class="form-group">
							<label for="validade-cartao">Validade cartao</label>
							<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>
				</div>
				<button type="submit" class="btn btn-primary btn-lg pull-right">
					<span class="glyphicon glyphicon-thumbs-up"></span>
					Confirmar Pedido
				</button>

			</form>
		</div>
	</div>
</body>
	<script src="js/jquery.js">	</script>	

	<script src="js/inputmask-plugin.js">	</script>	
c
	<script src="js/total.js"></script>


</html>