<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sobre a Mirror Fashion</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/sobre.css">
	<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
	<header class="container">
		<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

		<p class="sacola">
			Nenhum item na sacola de compras
		</p>

		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua conta</a></li>
				<li><a href="#">Lista de desejo</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.html">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>
	<section class="container">
		<h1 class="titulo">A Mirror Fashion</h1>
		<article>
			<?php echo $_POST['cor']; 
			echo $_POST['tamanho'];
			?>
			
			<p id="primeirop">
				A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo. Fundada há <?php print date(Y)-1932; ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118 deles.
			</p>
			<p>
				Nosso centro de distribuição fica em <a href="http://maps.google.com.br/q=Jacarezinho" target="_blanc">Jacarezinho, no Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
				Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja </a>ou entre em contato se tiver dúvidas. Conheça também nossa <a href=#historia>história</a> e nossos <a href=#diferenciais>diferenciais</a>.
			</p>
			<figure id="img-cd">
				<img src="img/centro-distribuicao.png"  alt="centro de distribuicao">
				<figcaption> Centro de distribuição</figcaption>
			</figure>
		</article>
	</section>

	<section>
		<h2 id="historia">História</h2>
		<article>
			<figure id="familia-pelho">
				<img src="img/familia-pelho.jpg" alt="familia pelho">
				<figcaption> Familia Pelho</figcaption>
			</figure>
			<p>
				A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa,revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
			</p>

			<p>
				O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. 
				Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos.
			</p>

			<p>
				O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho e nos escritórios em todo país.
			</p>

			<p>
				Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, 
				homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror 
				Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
			</p>


		</article>
	</section>
	
	<section>
		<h2 id="diferenciais">Diferenciais</h2>

		<article>
			<ul>
				<li>Menor preço do varejo, garantido</li>
				<li>Se você achar uma loja mais barata, leva o produto de graça</li>
				<li>Pague em reais, dólares, euros ou bitcoins</li>
				<li>Todas as compras com frete grátis para o mundo todo</li>
				<li>Maior comércio eletrônico de moda do mundo</li>
				<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
				<li>Presente em 124 países</li>
				<li>Mais de um milhão de funcionários em todo o mundo</li>

			</ul>5r

		</article>
	</section>	


	<footer id="rodape">
		<div class="container">
			<img src="img/logo-rodape.png" alt="Logo Mirror Fashion">
			<ul class="social">
				<li><a href="http://wwww.facebook.com/mirrorfashion">Facebook</a></li>
				<li><a href="http://wwww.twitter.com/mirrorfashion">Twitter</a></li>
				<li><a href="http://wwww.plus.google.com/mirrorfashion">Google +</a></li>
			</ul>
		</div>

	</footer>

</body>

<script src="js/jquery.js">	</script>
<script src="js/console.js">	</script>
</html>