<?php 	get_header() ?>
		<div class="torso" role="main">
			<article class="post hentry">
				<header class="header">
					<div class="wrap">
						<hgroup class="heading">
							<h2 class="post-category">Apartamento</h2>
							<h1 class="post-title entry-title"><?php the_title() ?></h1>
							<dl class="post-tags">
								<dt class="dt">Local</dt>
								<dd class="dd">Rio de Janeiro-RJ</dd>
								<dt class="dt">ano</dt>
								<dd class="dd">2009</dd>
								<dt class="dt">Projeto</dt>
								<dd class="dd">Marília Fontenelle</dd>
							</dl>
						</hgroup>
						<p class="post-summary entry-summary"><?php the_excerpt() ?></p>
					</div>
				</header>
				<div class="content entry-content">
					<div class="wrap">
						<div class="post-content">
							<div class="post-gallery">
								<div class="gallery-wrap">
									<div class="gallery-view">
										<a href="#"><img src="http://dummyimage.com/706x544" alt="" class="gallery-img" width="706" height="544"></a>
									</div>
								</div>
								<button class="prev"></button>
								<button class="next"></button>
							</div>
							<ul class="post-nav">
								<li class="nav-item"><a href="archive.html" class="nav-home"><?php _e('Outros Projetos', 'marilia') ?></a></li>
								<li class="nav-item"><a href="#" class="nav-next"><?php _e('Próximo', 'marilia') ?></a></li>
								<li class="nav-item"><a href="#" class="nav-prev"><?php _e('Anterior', 'marilia') ?></a></li>
							</ul>
							<section class="more-posts">
								<h3 class="title"><?php _e('Outros Projetos', 'marilia') ?></h3>
								<div class="more-wrap">
									<div class="more-view">
										<ul class="matrix">
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
											<li class="matrix-item" style="background-image:url(http://dummyimage.com/318x276)">
												<a href="#" class="matrix-cover">
													<div class="cell">
														<p class="matrix-category">Apartamento</p>
														<h1 class="matrix-title">Flamengo</h1>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<button class="prev"></button>
									<button class="next"></button>
								</div>
							</section>
						</div>
					</div>
				</div>
			</article>
		</div>
<?php 	get_footer() ?>