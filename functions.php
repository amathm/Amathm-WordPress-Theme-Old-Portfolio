<?php

function modify_jquery() {
	if (!is_admin()) {
	// comment out the next two lines to load the local copy of jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, '1.11.3');
	wp_enqueue_script('jquery');
	}
}

add_action('init', 'modify_jquery');
 
function my_scripts_styles() {

 wp_register_script ( 'bootstrapjs' , get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '1', true );
 wp_register_style ( 'bootstrapcss' , get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', '' , '', 'all' );
 wp_register_style ( 'custom' , get_stylesheet_directory_uri() . '/custom.css', '' , '', 'all' );
 wp_register_script ( 'infogrid' , get_stylesheet_directory_uri() . '/js/infogrid.js', array( 'jquery' ), '1', true );

 
wp_enqueue_script( 'bootstrapjs' );
wp_enqueue_style( 'bootstrapcss' );
if(is_page() ){
	wp_enqueue_style('style', get_stylesheet_uri());
} else {
	wp_enqueue_script( 'infogrid' );
	wp_enqueue_style( 'custom' );
	}
}
 
add_action( 'wp_enqueue_scripts', 'my_scripts_styles');

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary Navigation', 'wptuts' ) );
        } endif;

// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
	
/*// Footer Menu Navigation 
register_nav_menus(array(
	'footer' => __('Footer Navigation'),
));*/

// handle excerpt length

function custom_excerpt() {
	return 140;
}
add_filter('excerpt_length', 'custom_excerpt');

function featured_setup(){
	// add image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 300, 120, true);
	add_image_size('large-thumbnail', 700, 400, true);
	add_theme_support( 'html5', array( 'search-form' ) );
	// add post format support
	add_theme_support('post-formats', array('aside') );
}

add_action('after_setup_theme', 'featured_setup');

// sorts post order
function foo_modify_query_order( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'orderby', 'modified' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'foo_modify_query_order' );

// widgets section
function widgetready() {
	register_sidebar(array(
		'name' => 'sidebar',
		'id' => 'sidebar1'
	));
	register_sidebar(array(
		'name' => 'sidebar two',
		'id' => 'sidebar2',
		'before_widget' => '<h2 class="header">',
		'after_widget' => '</h2>'
	));
}

add_action('widgets_init', 'widgetready');

// Apply filter
add_filter('body_class', 'multisite_body_classes');

function multisite_body_classes($classes) {
        $id = get_current_blog_id();
        $slug = strtolower(str_replace(' ', '-', trim(get_bloginfo('name'))));
        $classes[] = $slug;
        $classes[] = 'body-id-'.$id;
		$classes[] = 'hfeed';
        return $classes;
}