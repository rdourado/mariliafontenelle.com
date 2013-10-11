<?php 
/*
Template name: Arquivo
*/
?>
<?php 	get_header() ?>
		<div class="body" role="main">
			<ul class="matrix">
<?php 			$i = 0;
				$symmetrical = get_field( 'post_type' ) == 'projeto' ? false : true;
				if ( is_page() )
					query_posts( "post_type=" . get_field( 'post_type' ) . "&posts_per_page=-1" );
				else
					query_posts( "{$query_string}&posts_per_page=-1" );
				while( have_posts() ) : the_post(); ?>
				<li <?php matrix_class($i) ?> style="background-image:url(<?php matrix_thumb($i++) ?>)">
					<a href="<?php the_permalink() ?>" class="matrix-cover">
						<div class="cell">
							<p class="matrix-category"><?php my_category() ?></p>
							<h1 class="matrix-title"><?php the_title() ?></h1>
						</div>
					</a>
				</li>
<?php 			endwhile; ?>
			</ul>
		</div>
<?php 	get_footer() ?>