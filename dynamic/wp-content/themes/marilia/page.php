<?php 	get_header() ?>
		<div class="torso" role="main">
<?php 		while( have_posts() ) : the_post(); ?>
			<article class="page hentry">
				<header class="header">
					<div class="wrap">
						<hgroup class="heading">
							<h2 class="page-category">Consultoria</h2>
							<h1 class="page-title entry-title"><?php the_title(); ?></h1>
						</hgroup>
						<p class="page-summary entry-summary"><?php the_excerpt() ?></p>
					</div>
				</header>
				<div class="content entry-content">
					<div class="wrap">
						<div class="page-thumbnail">
							<a href="#"><img src="http://dummyimage.com/780x372/000/fff" alt="" width="780" height="372"></a>
						</div>
						<div class="page-wrap">
							<div class="page-content">
								<?php the_content(); ?>
							</div>
							<div class="page-sidebar">
								<figure class="figure">
									<img src="http://dummyimage.com/300x300" alt="" width="300" height="300">
									<figcaption class="caption">Legenda da imagem acima</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</article>
<?php 		endwhile; ?>
		</div>
<?php 	get_footer() ?>