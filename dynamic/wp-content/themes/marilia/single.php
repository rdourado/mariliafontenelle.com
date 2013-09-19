<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article class="post hentry">
				<header class="header">
					<div class="wrap">
						<hgroup class="heading">
							<h2 class="post-category"><?php my_category() ?></h2>
							<h1 class="post-title entry-title"><?php the_title() ?></h1>
							<dl class="post-tags">
<?php 							if ( get_field( 'local' ) ) : ?>
								<dt class="dt"><?php _e('Local', 'marilia') ?></dt>
								<dd class="dd"><?php the_field( 'local' ) ?></dd>
<?php 							endif; ?>
<?php 							if ( get_field( 'ano' ) ) : ?>
								<dt class="dt"><?php _e('Ano', 'marilia') ?></dt>
								<dd class="dd"><?php the_field( 'ano' ) ?></dd>
<?php 							endif; ?>
<?php 							if ( get_field( 'projeto' ) ) : ?>
								<dt class="dt"><?php _e('Projeto', 'marilia') ?></dt>
								<dd class="dd"><?php the_field( 'projeto' ) ?></dd>
<?php 							endif; ?>
							</dl>
						</hgroup>
						<p class="post-summary entry-summary"><?php the_excerpt() ?></p>
					</div>
				</header>
				<div class="content entry-content">
					<div class="wrap">
						<div class="post-content">
<?php 						$images = get_field( 'gallery' );
							if ( $images ) : ?>
							<div class="post-gallery">
								<div class="gallery-wrap">
									<div class="gallery-view">
<?php 									foreach ( $images as $img ) : ?>
										<a href="#"><img src="<?php t_url() ?>/timthumb.php?src=<?php echo $img['url']; ?>&amp;w=706&amp;h=544&amp;zc=2" alt="" class="gallery-img" width="706" height="544"></a>
<?php 									endforeach; ?>
									</div>
								</div>
								<button class="prev"></button>
								<button class="next"></button>
							</div>
<?php 						endif; ?>
							<ul class="post-nav">
								<li class="nav-item"><a href="<?php echo get_post_type_archive_link( 'projeto' ) ?>" class="nav-home"><?php _e('Outros Projetos', 'marilia') ?></a></li>
								<li class="nav-item"><?php next_post_link( '%link', '<span class="nav-next">' . __('Próximo', 'marilia') . '</span>' ); ?></li>
								<li class="nav-item"><?php previous_post_link( '%link', '<span class="nav-prev">' . __('Anterior', 'marilia') . '</span>' ); ?></li>
							</ul>
<?php 						$loop = new WP_Query( array(
								'post_type' => 'projeto',
								'posts_per_page' => -1,
								'post__not_in' => array( get_the_ID() )
							) );
							if ( $loop->have_posts() ) : ?>
							<section class="more-posts">
								<h3 class="title"><?php _e('Outros Projetos', 'marilia') ?></h3>
								<div class="more-wrap">
									<div class="more-view">
										<ul class="matrix">
<?php 										while( $loop->have_posts() ) : $loop->the_post(); ?>
											<li class="matrix-item" style="background-image:url(<?php my_thumb(); ?>)">
												<a href="<?php the_permalink() ?>" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category"><?php my_category() ?></p>
														<h1 class="matrix-title"><?php the_title() ?></h1>
													</div>
												</a>
											</li>
<?php 										endwhile; ?>
										</ul>
									</div>
									<button class="prev"></button>
									<button class="next"></button>
								</div>
							</section>
<?php 						endif;
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>