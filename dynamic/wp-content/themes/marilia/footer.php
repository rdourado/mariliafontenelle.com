	</div>
	<hr>
	<footer class="foot">
		<?php 
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'menu_class' 	 => 'menu-foot',
			'container' 	 => '',
			'fallback_cb' 	 => null,
		) );
		?>

		<ul class="social-menu">
			<li class="social-item item-fb"><a href="#"><img src="<?php t_url() ?>/img/ico-fb.svg" alt="Facebook" width="16" height="16"></a></li>
			<li class="social-item item-in"><a href="#"><img src="<?php t_url() ?>/img/ico-in.svg" alt="LinkedIn" width="16" height="16"></a></li>
		</ul>
		<p class="copyright">© <?php echo date('Y'); ?> - <?php bloginfo('name') ?> — <?php _e('Todos os direitos reservados.', 'marilia') ?></p>
	</footer>
	<!-- WP/ --><?php wp_footer() ?><!-- /WP -->
</body>
</html>