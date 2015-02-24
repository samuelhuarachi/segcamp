<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name=description content="Serviços especializados adequando às necessidades específicas de cada cliente. Profissionais capacitados e equipamentos de última geração, garantem a satisfação. Atendemos condomínios, indústria, comércio, escolas, hospitais, bancos, shoppings, supermercados, consultórios, escritórios, eventos, residências e particulares.">
  	<meta name=keywords content="terceirizados, segurança, controle de acesso, supervisão, fábricas, comércio, shopping, shoppings, limpeza, portaria, recepção, ajudantes, serviços, serviçoes gerais, manobrista">

	<title>Segcamp Serviços</title>
	<!-- <link rel="stylesheet" href="css/main.min.css"> -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="shortcut icon" href="images/segcamp.png" title="Favicon" />

</head>
<body>
	<?php

	$op = 1;
	if($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/" )
	{
		$op = 1;
	}
	if($_SERVER['REQUEST_URI'] == "/limpeza.php" )
	{
		$op = 2;
	}

	?>
	<div class="topo">
		<div class="estrutura">

			<div class="cabecalho">
				<div class="usamenu">
					<div class="usamenu-part1">
						<ul>
							


							<li <?php if($op == 1){ echo 'class="usaliactive"'; } ?> ><a href="index.php">PORTARIA</a></li>
							<li <?php if($op == 2){ echo 'class="usaliactive"'; } ?> ><a href="limpeza.php">LIMPEZA</a></li>
							<li ><a href="/">SERVIÇOS GERAIS</a></li>
							<li ><a href="/">CONTATO</a></li>
						</ul>
					</div>
					<div class="usamenu-part2">
						<img src="images/twitter_ico.png" alt="" width="25px">
						<img src="images/facebook_ico.png" alt="" width="25px">
						<img src="images/youtube_ico.png" alt="" width="25px">
					</div>
				</div>
				<div class="usainfo1">

					<div class="usatelandlogo">

						<div class="usalogo">
							<a href=""><img src="images/logo.jpg" alt=""></a>
						</div>
						<div class="usacomboright">
							<div class="usatelem">
								<h3>Emergência</h3>
								(19) 3229-9050 / 99219-6148
							</div>
						</div>

						<div class="usasec-menu">
							<a href="#">Quem somos</a> | <a href="#">Serviços especiais</a> |
							<a href="#">Deferenciais</a>
						</div>

						<div class="usaservicos">

							<div class="usa-img-desc">
								<img src="images/luz1.jpg" alt="">
								Serviços especializados adequando às  necessidades  específicas
								de cada cliente.
							</div>
							<div class="usa-img-desc">
								<img src="images/premio1.jpg" alt="">
								Profissionais capacitados e equipamentos de última geração, garantem
								a satisfação.
							</div>
							<div class="usa-img-desc">
								<img src="images/globo1.jpg" alt="">
								Atendemos condomínios, indústria, comércio, escolas, hospitais, bancos,
								shoppings, supermercados, consultórios, escritórios, eventos, residências e
								particulares.
							</div>


						</div>
						<!-- <div class="usa-banners">
							<div class="usa-estilo1">

							</div>
							<div class="usa-estilo2">

							</div>

						</div> -->
						<div class="usa-bannerscli">
							<div class="cycle-slideshow"
							    data-cycle-fx=scrollHorz
							    data-cycle-timeout=5000
							    data-cycle-pause-on-hover="true"
							    >
							    <!-- empty element for pager links -->
								<div class="cycle-pager"></div>
							    <img src="images/banner_servicos_gerais_segcamp2.jpg" width="1060px" >
							    <img src="images/banner_limpeza_segcamp.jpg" width="1060px" >
							    <img src="images/banner_portaria_segcamp2.jpg" width="1060px" >
							</div>
						</div>
					</div>
				</div>