<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/checkout.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>

	<div class="container">

		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
			</div>
		</div>

		

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Sua Compra</h2>
			</div>
			<div class="panel-body">
				<!--<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png">-->
				<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive">
				<dl>
					<dt>Produto</dt>
					<dd>Fuzzy Cardigan</dd>
					<dt>Cor</dt>
					<dd>verde</dd>
					<dt>Tamanho</dt>
					<dd>40</dd>
					<dt>Preço</dt>
					<dd>R$ 129,00</dd>
				</dl>
			</div>
		</div>

		<form>
			<fieldset>
				<legend>Dados Pessoais</legend>
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" class="form-control" id="nome" name="nome" autofocus required>
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>				
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="sim" name="spam" checked>
					</label>
					Quero receber e-mail da Mirror Fashion
				</div>
			</fieldset>
			<fieldset>
				<legend>Cartão de crédito</legend>
				<div class="form-group">
					<label for="numero-cartao">Número - CVV</label>
					<input type="text" class="form-control"
					id="numero-cartao" name="numero-cartao">
				</div>
				<div class="form-group">
					<label for="bandeira-cartao">Bandeira</label>
					<select name="bandeira-cartao" id="bandeira-cartao"
					class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">VISA</option>
						<option value="amex">American Express</option>
					</select>
				</div>
				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control"
					id="validade-cartao" name="validade-cartao">
				</div>
			</fieldset>
			<button type="submit" class="btn btn-primary btn-lg pull-right">
				<span class="glyphicon glyphicon-thumbs-up"></span>
				Confirmar Pedido
			</button>
			<script>
				document.querySelector('input[type=email]').oninvalid = function() {
			// remove mensagens de erro antigas
				this.setCustomValidity("");
			// reexecuta validação
				if (!this.validity.valid) {
			// se inválido, coloca mensagem de erro
			this.setCustomValidity("Email inválido");
			}
			};
			</script>
		</form>

		

		

		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>Obrigado....</p>
			</div>
		</div>

	</div>


</body>
</html>