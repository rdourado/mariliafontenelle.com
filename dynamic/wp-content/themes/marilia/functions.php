<?php 

add_filter( 'the_excerpt', 'nl2br' );
remove_filter( 'the_excerpt', 'wpautop' );

function t_url() {
	echo get_bloginfo( 'template_url' );
}

function my_logo() {
	global $post;

	$turl = get_bloginfo( 'template_url' );
	$name = get_bloginfo( 'name' );
	$home = home_url( '/' );
	$logo = "<img src='{$turl}/img/logo.svg' alt='{$name}' class='logo-img' width='160' height='94'>";

	if ( is_front_page() ) echo "<h1 class='logo'>{$logo}</h1>\n";
	else echo "<div class='logo'><a href='{$home}'>{$logo}</a></div>\n";
}

function the_thumb( $size = 'thumbnail' ) {
	global $post;
	$id = get_post_thumbnail_id();
	if ( $id )
		$src = wp_get_attachment_image_src( $id, $size );
	if ( $src )
		echo $src['url'];
}

// 
// Setup
// 

add_action( 'after_setup_theme', 'my_setup' );
add_action( 'after_switch_theme', 'my_init_setup' );

function my_setup() {
	// Menu
	register_nav_menu( 'primary', __('Menu Superior', 'marilia') );
	// Thumbnails
	// add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured_image', 	780, 372, true );
	add_image_size( 'wide_image', 		638, 276, true );
	add_image_size( 'square_image', 	318, 276, true );
	// Remove default gallery style
	add_filter( 'use_default_gallery_style', '__return_false' );
}

function my_init_setup() {
	// remove_role( 'subscriber' );
	// $role = get_role( 'editor' );
	// $role->remove_cap( 'edit_pages' );
		
	update_option( 'thumbnail_size_w', 318 );
	update_option( 'thumbnail_size_h', 276 );
	update_option( 'medium_size_w', 300 );
	update_option( 'medium_size_h', 400 );
	// update_option( 'large_size_w', 780 );
	// update_option( 'large_size_h', 475 );
	// update_option( 'large_crop', 1 );
	// delete_option( 'medium_crop' );
}

// 
// Admin
// 

add_filter( 'default_hidden_meta_boxes', 'be_hidden_meta_boxes', 10, 2 );
function be_hidden_meta_boxes( $hidden, $screen ) {
	if ( 'post' == $screen->base || 'page' == $screen->base )
		$hidden = array('slugdiv', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv', 'postcustom');
		// remove 'postexcerpt'
	return $hidden;
}

// 
// Fix filenames
// 

add_filter( 'sanitize_file_name', 'make_filename_hash', 10 );

function make_filename_hash( $filename ) {
	$info = pathinfo( $filename );
	$ext  = empty( $info['extension'] ) ? '' : '.' . $info['extension'];
	$name = basename( $filename, $ext );
	return md5( $name ) . $ext;
}

// 
// Excerpt
// 

add_filter( 'excerpt_length', 'new_excerpt_length' );
add_filter( 'acf/update_value/name=excerpt', 'my_acf_excerpt', 10, 3 );

function new_excerpt_length( $length ) {
	return 20;
}

function my_acf_excerpt( $value, $post_id, $field ) {
	wp_update_post( array(
		'ID' => $post_id,
		'post_excerpt' => $value
	) );
	return $value;
}

// 
// Custom post type
// 

add_action( 'init', 'register_cpt_projeto' );

function register_cpt_projeto() {

	$labels = array( 
		'name' => _x( 'Projetos', 'marilia' ),
		'singular_name' => _x( 'Projeto', 'marilia' ),
		'add_new' => _x( 'Adicionar Novo', 'marilia' ),
		'add_new_item' => _x( 'Adicionar novo projeto', 'marilia' ),
		'edit_item' => _x( 'Edit Projeto', 'marilia' ),
		'new_item' => _x( 'New Projeto', 'marilia' ),
		'view_item' => _x( 'View Projeto', 'marilia' ),
		'search_items' => _x( 'Search Projetos', 'marilia' ),
		'not_found' => _x( 'No projetos found', 'marilia' ),
		'not_found_in_trash' => _x( 'No projetos found in Trash', 'marilia' ),
		'parent_item_colon' => _x( 'Parent Projeto:', 'marilia' ),
		'menu_name' => _x( 'Projetos', 'marilia' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,
		
		'supports' => array( 'title', 'excerpt', 'custom-fields' ),
		'taxonomies' => array( 'category' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'projeto', $args );
}