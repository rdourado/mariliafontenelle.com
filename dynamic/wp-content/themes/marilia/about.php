<?php 
/*
Template name: Sobre
*/
?>
<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article id="about" class="hentry">
				<div class="column-1">
					<div class="entry-content">
						<?php the_field('content') ?>
<?php 					if ( get_field( 'contact_link' ) ) : ?>
						<p><a href="<?php the_field('contact_link') ?>" class="big-button"><?php _e('Fale conosco', 'marilia') ?></a></p>
<?php 					endif; ?>
					</div>
				</div>
				<div class="column-2">
					<figure class="marilia">
<?php 					if ( get_field( 'image' ) ) : ?>
						<img src="<?php the_field('image') ?>" alt="" class="marilia-avatar">
<?php 					endif; ?>
						<figcaption><?php the_field('caption') ?></figcaption>
					</figure>
					<?php the_field('resume') ?>
<?php 				if ( get_field('resume_type') ) :
					$link = ('file' == get_field('resume_type')) ? get_field('resume_file') : esc_url( get_field('resume_link') ); ?>
					<p><a href="<?php echo $link; ?>" class="small-button"><?php _e('Currículo Lattes', 'marilia') ?></a></p>
<?php 				endif; ?>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>