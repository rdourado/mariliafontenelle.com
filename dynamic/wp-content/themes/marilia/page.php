<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article class="page hentry">
				<header class="header">
					<div class="wrap">
						<hgroup class="heading">
<?php 						if ( get_field( 'pretitle' ) ) : ?>
							<h2 class="page-category"><?php the_field('pretitle') ?></h2>
<?php 						elseif ( $post->post_parent ) : ?>
							<h2 class="page-category"><?php echo get_the_title( $post->post_parent ); ?></h2>
<?php 						endif; ?>
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
<?php 						if ( get_field( 'sidebar' ) ) : ?>
							<div class="page-sidebar">
<?php 							if ( 'image' == get_field( 'sidebar' ) ) : ?>
								<figure class="figure">
									<?php echo wp_get_attachment_image( get_field( 'sidebar_image' ), 'medium' ); ?>

									<figcaption class="caption"><?php the_field('sidebar_caption') ?></figcaption>
								</figure>
<?php 							elseif ( 'gallery' == get_field( 'sidebar' ) ) : ?>
								<div class="sidebar-gallery">
									<div class="sidebar-wrap">
										<div class="sidebar-view">
<?php 										$images = get_field( 'sidebar_gallery' );
											foreach ( $images as $img ) : ?>
											<a href="<?php echo $img['url']; ?>" class="fancybox"><img src="<?php t_url() ?>/timthumb.php?src=<?php echo $img['url']; ?>&amp;w=68&amp;h=68" alt="" class="gallery-img"></a>
<?php 										endforeach; ?>
										</div>
									</div>
									<button class="prev"></button>
									<button class="next"></button>
								</div>
<?php 							endif; ?>
							</div>
<?php 						endif; ?>
						</div>
					</div>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>