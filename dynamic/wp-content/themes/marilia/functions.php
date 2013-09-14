<?php 

remove_filter( 'the_excerpt', 'wpautop' );

function t_url() {
	echo get_bloginfo( 'template_url' );
}

function my_logo() {
	global $post;
	$turl = get_bloginfo( 'template_url' );
	$name = get_bloginfo( 'name' );
	$home = home_url( '/' );
	if ( is_front_page() ) 
		echo "<h1 class='logo'><img src='{$turl}/img/logo.svg' alt='{$name}' class='logo-img' width='160' height='94'></h1>\n";
	else 
		echo "<div class='logo'><a href='{$home}'><img src='{$turl}/img/logo.svg' alt='{$name}' class='logo-img' width='160' height='94'></a></div>\n";
}

function the_thumb( $size = 'thumbnail' ) {
	global $post;
	$id = get_post_thumbnail_id();
	if ( $id )
		$src = wp_get_attachment_image_src( $id, $size );
	if ( $src )
		echo $src['url'];
}