<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title() ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="<?php t_url() ?>/css/screen.css?<?php echo filemtime( TEMPLATEPATH . '/css/screen.css' ); ?>" media="screen" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- WP/ --><?php wp_head() ?><!-- /WP -->
</head>
<body <?php body_class('no-js') ?>>
	<div class="wrap">
		<div class="fixed-nav">
			<?php 
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' 	 => 'fixed-menu',
				'container' 	 => '',
				'fallback_cb' 	 => null,
			) );
			?>
		</div>
		<header class="head">
			<?php my_logo() ?>
			<nav class="nav">
				<?php 
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class' 	 => 'menu',
					'container' 	 => '',
					'fallback_cb' 	 => null,
				) );
				?>

				<ul class="lang-menu">
					<li class="lang-item"><a href="#">Português</a></li>
					<li class="lang-item"><a href="#">Inglês</a></li>
				</ul>
			</nav>
		</header>
		<hr>
