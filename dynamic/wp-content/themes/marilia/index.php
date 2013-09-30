<?php 
/*
Template name: Home
*/
$ID = get_option( 'page_on_front' );
?>
<?php 	get_header() ?>
		<div class="body" role="main">
			<div class="mosaic">
<?php 		for ( $i = 1; $i <= 3; $i++ ) :
				$layout = get_field( "{$i}_layout", $ID );
				if ( $layout == 1 ) : ?>
				<div class="mosaic-wide">
					<div class="mosaic-image" style="background-image:url(<?php 
					echo reset( wp_get_attachment_image_src( get_field("{$i}_image_1"), 'wide_image' ) ) ?>)"></div>
					<div class="mosaic-cover">
						<div class="table">
							<div class="cell">
								<h2 class="mosaic-title"><?php the_field( "{$i}_title", $ID ) ?></h2>
								<p class="mosaic-excerpt"><?php the_field( "{$i}_excerpt", $ID ) ?></p>
							</div>
						</div>
					</div>
					<div class="mosaic-nav">
						<ul class="mosaic-menu">
<?php 						while( has_sub_field( "{$i}_menu", $ID ) ) :
							$obj = get_sub_field( 'item_obj' ); ?>
							<li class="mosaic-item"><a href="<?php echo get_permalink( $obj ); ?>"><?php 
							echo get_the_title( $obj ); ?></a></li>
<?php 						endwhile; ?>
						</ul>
					</div>
				</div>
<?php 			elseif ( $layout == 2 ) : ?>
				<div class="mosaic-narrow">
					<div class="mosaic-image" style="background-image:url(<?php 
					echo reset( wp_get_attachment_image_src( get_field("{$i}_image_2_1"), 'thumbnail' ) ) ?>)"></div>
					<div class="mosaic-cover">
						<div class="table">
							<div class="cell">
								<h2 class="mosaic-title"><?php the_field( "{$i}_title", $ID ) ?></h2>
								<p class="mosaic-excerpt"><?php the_field( "{$i}_excerpt", $ID ) ?></p>
							</div>
						</div>
					</div>
					<div class="mosaic-nav">
						<ul class="mosaic-menu">
<?php 						while( has_sub_field( "{$i}_menu", $ID ) ) :
							$obj = get_sub_field( 'item_obj' ); ?>
							<li class="mosaic-item"><a href="<?php echo get_permalink( $obj ); ?>"><?php 
							echo get_the_title( $obj ); ?></a></li>
<?php 						endwhile; ?>
						</ul>
					</div>
				</div>
				<div class="mosaic-box">
					<div class="mosaic-image" style="background-image:url(<?php 
					echo reset( wp_get_attachment_image_src( get_field("{$i}_image_2_2"), 'thumbnail' ) ) ?>)"></div>
				</div>
<?php 			elseif ( $layout == 3 ) : ?>
				<div class="mosaic-box">
					<div class="mosaic-image" style="background-image:url(<?php 
					echo reset( wp_get_attachment_image_src( get_field("{$i}_image_2_1"), 'thumbnail' ) ) ?>)"></div>
				</div>
				<div class="mosaic-narrow">
					<div class="mosaic-image" style="background-image:url(<?php 
					echo reset( wp_get_attachment_image_src( get_field("{$i}_image_2_2"), 'thumbnail' ) ) ?>)"></div>
					<div class="mosaic-cover">
						<div class="table">
							<div class="cell">
								<h2 class="mosaic-title"><?php the_field( "{$i}_title", $ID ) ?></h2>
								<p class="mosaic-excerpt"><?php the_field( "{$i}_excerpt", $ID ) ?></p>
							</div>
						</div>
					</div>
					<div class="mosaic-nav">
						<ul class="mosaic-menu">
<?php 						while( has_sub_field( "{$i}_menu", $ID ) ) :
							$obj = get_sub_field( 'item_obj' ); ?>
							<li class="mosaic-item"><a href="<?php echo get_permalink( $obj ); ?>"><?php 
							echo get_the_title( $obj ); ?></a></li>
<?php 						endwhile; ?>
						</ul>
					</div>
				</div>
<?php 			endif;
			endfor; ?>
			</div>
		</div>
<?php 	get_footer() ?>