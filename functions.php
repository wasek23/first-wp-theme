<?php
// Calling Resources
function call_source(){
	// Calling css
	wp_enqueue_style('mainstyle', get_stylesheet_uri(), '', '1.0.0');
	
	wp_enqueue_style('contactform7_css', get_template_directory_uri(). '/css/contactform7.css', '', '1.0.0');
	
	wp_enqueue_style('comments_css', get_template_directory_uri(). '/css/comments.css', '', '1.0.0');
	
	wp_enqueue_style('slider_css', get_template_directory_uri(). '/css/bjqs.css', '', '1.0');
	
	wp_enqueue_style('responsive_css', get_template_directory_uri(). '/css/responsive.css', '', '1.0.0');
	
	// Calling scripts
	wp_enqueue_script('jquery_library', get_template_directory_uri(). '/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '3.3.1');
	
	wp_enqueue_script('responsive_menu', get_template_directory_uri(). '/js/responsive-menu.js', '', '1.0');
	
	wp_enqueue_script('bjqs_slider', get_template_directory_uri(). '/js/bjqs-1.3.min.js', '', '1.3');
	
	wp_enqueue_script('acor_slider', get_template_directory_uri(). '/js/acor.js', '', '1.0');
	
	wp_enqueue_script('my_script', get_template_directory_uri(). '/js/myscript.js', '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'call_source');


// Theme Setup
function theme_setup(){
	// Regester Menu
	register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
	));
	
	// Featured Img
	add_theme_support('post-thumbnails');
	
	// Slider
	register_post_type( 'bjqs_slider', array(
		'labels' => array(
			'name' => 'Slider',
			'add_new_item' => 'Add New Slider',
		),
		'public' => true,
		'supports' => array(
			'title', 'thumbnail',
		),
	));
}
add_action('after_setup_theme', 'theme_setup');


// Sidebar
function widgets_reg(){
	// Main Sidebar
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	
	// Footer Sidebar
	register_sidebar(array(
		'name' => 'Footer Top Left',
		'id' => 'footer_left',
		'before_widget' => '<div class="col">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Top Middle',
		'id' => 'footer_middle',
		'before_widget' => '<div class="col">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	register_sidebar(array(
		'name' => 'Footer Top Right',
		'id' => 'footer_right',
		'before_widget' => '<div class="col nomarg">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'widgets_reg');

// Excerpt Function
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".'readmore'."'>...(Continue Reading)</a>";
	echo $excerpt;
}

// Comment Form Fields Placeholder
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Name *"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email *"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );







