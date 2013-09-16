<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title>
	<link href="<?php t_url() ?>/css/screen.css" media="screen" rel="stylesheet">
	<!-- WP/ --><?php wp_head() ?><!-- /WP -->
</head>
<body <?php body_class('no-js') ?>>
	<div class="wrap">
		<header class="head">
			<?php my_logo() ?>
			<nav class="nav">
				<?php 
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class' 	 => 'menu',
					'container' 	 => '',
					'fallback_cb' 	 => false,
				) );
				?>

				<ul class="lang-menu">
					<li class="lang-item"><a href="#">Português</a></li>
					<li class="lang-item"><a href="#">Inglês</a></li>
				</ul>
			</nav>
		</header>
		<hr>
