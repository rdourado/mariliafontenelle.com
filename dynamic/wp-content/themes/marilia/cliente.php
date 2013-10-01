<?php 
/*
Template name: Área do Cliente
*/
if ( ! is_user_logged_in() ) {
	wp_redirect( home_url( '/wp-login.php?redirect_to=' . get_permalink() ) );
	exit;
}
?>
<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		$query = new WP_Query( array(
				'post_type' => 'feedback',
				'meta_key' => 'cliente',
				'meta_value_num' => get_current_user_id(),
				'posts_per_page' => -1,
			) );
			while( $query->have_posts() ) : $query->the_post(); ?>
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