<?php 	get_header() ?>
		<div class="body" role="main">
			<ul class="matrix">
<?php 			while( have_posts() ) : the_post() ?>
				<li class="matrix-item" style="background-image:url(<?php the_thumb() ?>)">
					<a href="single.html" class="matrix-cover">
						<div class="cell">
							<p class="matrix-category">Apartamento</p>
							<h1 class="matrix-title"><?php the_title() ?></h1>
						</div>
					</a>
				</li>
<?php 			endwhile; ?>
			</ul>
		</div>
<?php 	get_footer() ?>