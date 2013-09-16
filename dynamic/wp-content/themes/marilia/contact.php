<?php 
/*
Template name: Contato
*/
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) wpcf7_enqueue_scripts();
?>
<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article id="contact" class="hentry">
				<div class="column-2">
					<h1 class="big-title entry-title"><?php the_field('heading') ?></h1>
					<ul class="contact-me">
<?php 					if ( get_field( 'email' ) ) : ?>
						<li class="my-item my-email"><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
<?php 					endif; ?>
<?php 					if ( get_field( 'phone' ) ) : ?>
						<li class="my-item my-phone"><?php the_field('phone') ?></li>
<?php 					endif; ?>
<?php 					if ( get_field( 'skype' ) ) : ?>
						<li class="my-item my-skype"><?php the_field('skype') ?></li>
<?php 					endif; ?>
					</ul>
				</div>
				<div class="column-1">
					<div class="entry-content">
						<?php echo do_shortcode( '[contact-form-7 id="19" title="Contato"]' ); ?>
					</div>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>