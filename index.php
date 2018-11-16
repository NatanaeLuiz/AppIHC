<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<title>GM Multimarcas | Loja</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 480px)">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 720px)">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
	
</head>
<body>
	<?php include("cabecalho.php"); ?>

	<div class="container destaque">

		<section class="busca">
			<h2>Busca</h2>
			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section>

		<section class = "menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a>
						<ul>
							<li><a href="#">Manga Curta</a></li>
							<li><a href="#">Manga Comprida</a></li>
							<li><a href="#">Camisa Social</a></li>
							<li><a href="#">Camisa Casual</a></li>
						</ul>
					</li>
					<li><a href="#">Sandálias</a></li>
					<li><a href="#">Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>			
		</section>
		<!-- fim menu-departamentos-->

		<img src="img/destaque-home.png" alt="Promoções: Big City Night">
		<!-- fim banner-destaque-->
	</div>
	<!-- fim container destaque-->

	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura1.png">				
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura2.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura3.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura4.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura5.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura6.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<!--	fim	do	primeiro	produto	-->
				<!--	coloque	mais	produtos	aqui!	-->	
			</ol>				
		</section>


		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura7.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura8.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura9.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura10.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura11.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="produto.php">
						<figure>
							<img src="img/produtos/miniatura12.png">
							<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
						</figure>
					</a>
				</li>
			</ol>				
		</section>		
		
	</div>
	
	<?php include("rodape.php"); ?>
	
	<script src="js/trocaBanner.js"></script>
	<script src="js/jquery.js"></script>
	<script>
		$('.novidades').addClass('painel-compacto');
		$('.novidades button').click(function() {
			$('.novidades').removeClass('painel-compacto');
		});
	</script>

</body>
</html>