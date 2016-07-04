<?php 

add_theme_support( 'menus');
add_theme_support( 'post-thumbnails');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );
	
// function wpp_create_widget( $name, $id, $description ) {

// 	register_sidebar(array(
// 		'name' => __( $name ),	 
// 		'id' => $id, 
// 		'description' => __( $description ),
// 		'before_widget' => '<div class="widget">',
// 		'after_widget' => '</div>',
// 		'before_title' => '<h2 class="module-heading">',
// 		'after_title' => '</h2>'
// 	));

// }
// wpp_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
// wpp_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

// function wpp_excerpt_length( $length ) {
// 	return 16;	
// }
// add_filter( 'excerpt_length', 'wpp_excerpt_length', 999 );

function wpp_theme_styles() {
	
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'raleway_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpp_theme_styles' );

function wpp_theme_js() {

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true ) ;
	
}
add_action( 'wp_enqueue_scripts', 'wpp_theme_js' );

?>