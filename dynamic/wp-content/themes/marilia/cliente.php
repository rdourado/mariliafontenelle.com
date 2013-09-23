<?php 
/*
Template name: Área do Cliente
*/
?>
<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article class="page hentry">
				<header class="header">
					<div class="wrap">
						<hgroup class="heading">
							<h1 class="page-title entry-title"><?php the_title(); ?></h1>
						</hgroup>
						<p class="page-summary entry-summary"><?php the_excerpt() ?></p>
					</div>
				</header>
				<div class="content entry-content">
					<div class="wrap">
<?php 					if ( get_field( 'featured_image' ) ) : ?>
						<div class="page-thumbnail">
							<?php echo wp_get_attachment_image( get_field( 'featured_image' ), 'featured_image' ); ?>

						</div>
<?php 					endif; ?>
						<div class="page-wrap">
							<div class="page-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>