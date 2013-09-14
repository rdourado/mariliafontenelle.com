<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title>
	<link href="<?php t_url() ?>/css/screen.css" media="screen" rel="stylesheet">
	<!-- WP/ --><?php wp_head() ?><!-- /WP -->
</head>
<body>
	<div class="wrap">
		<header class="head">
			<?php my_logo() ?>
			<nav class="nav">
				<ul class="menu">
					<li class="menu-item"><a href="index.html#about">Empresa</a></li>
					<li class="menu-item">
						<a href="archive.html">Projeto</a>
						<ul class="submenu">
							<li class="menu-item"><a href="archive.html">Arquitetura</a></li>
							<li class="menu-item"><a href="archive.html">Interiores</a></li>
							<li class="menu-item"><a href="archive.html">Portfolio</a></li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="archive.html">Consultoria</a>
						<ul class="submenu">
							<li class="menu-item"><a href="page.html">Conforto Lumínico</a></li>
							<li class="menu-item"><a href="page.html">Conforto Térmico</a></li>
							<li class="menu-item"><a href="page.html">Certificações</a></li>
							<li class="menu-item"><a href="page.html">Apoio técnico compra de imóvel</a></li>
							<li class="menu-item"><a href="archive.html">Portfolio</a></li>
						</ul>
					</li>
					<li class="menu-item"><a href="page.html">Ensino</a></li>
					<li class="menu-item"><a href="page.html">Publicações</a></li>
					<li class="menu-item item-contact"><a href="index.html#contact">Contato</a></li>
				</ul>
				<ul class="lang-menu">
					<li class="lang-item"><a href="#">Português</a></li>
					<li class="lang-item"><a href="#">Inglês</a></li>
				</ul>
			</nav>
		</header>
		<hr>
