<?php
/* Load Parent Stylesheets
================================================================================*/
if( !function_exists( 'fcwp_load_parent_stylesheets' ) ) :
	function fcwp_load_parent_stylesheets() {
		// Load the main stylesheet.
		wp_enqueue_style( 'parent-style', FCWP_URI . '/style.css', array(), FCWP_VERSION );
	}
	add_action( 'wp_enqueue_scripts', 'fcwp_load_parent_stylesheets' );
endif;

/* Theme Setup
================================================================================*/
if( !function_exists( 'fcwp_theme_support' ) ) :
	function fcwp_theme_support() {
		// Load taxdomain
		load_theme_textdomain( FCWP_TAXDOMAIN, get_template_directory() . '/languages' );
	    // Automatic Feed Support
	    add_theme_support( 'automatic-feed-links' );
	    add_image_size( 'small', 480, 9999 );
	    add_image_size( 'medium', 1000, 9999 );
	    add_image_size( 'large', 1400, 9999 );
	    // Title Tage Support
	    add_theme_support( 'title-tag' );
	    // Post Thumbnails
	    add_theme_support( 'post-thumbnails' );
	    // Register Nav Menus*/
	    register_nav_menus( array(
	        'primary' => __( 'Primary', FCWP_TAXDOMAIN ),
	    ) );
	}
	add_action( 'after_setup_theme', 'fcwp_theme_support' );
endif;

/* Load Stylesheets
================================================================================*/
if( !function_exists( 'fcwp_load_stylesheets' ) ) :
	function fcwp_load_stylesheets() {
		// Load the main stylesheet.
		wp_enqueue_style( 'style', FCWP_STYLESHEETURI, '', FCWP_VERSION );
		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'ie8-style', FCWP_CHILD_STYLESHEETURI . '/css/ie8.style.css', '', FCWP_VERSION );
		wp_style_add_data( 'ie8-style', 'conditional', 'IE 8' );
		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'ie9-style', FCWP_CHILD_STYLESHEETURI . '/css/ie9.style.css', '', FCWP_VERSION );
		wp_style_add_data( 'ie9-style', 'conditional', 'IE 9' );
		// Font Awesome
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '', FCWP_VERSION );
	}
	add_action( 'wp_enqueue_scripts', 'fcwp_load_stylesheets' );
endif;

/* Load JavaScript
================================================================================*/
if( !function_exists( 'fcwp_load_child_javascript' ) ) :
	function fcwp_load_child_javascript() {
	    // scripts.min.js
	    wp_register_script( 'child-scripts.min.js', FCWP_CHILD_STYLESHEETURI . '/js/scripts.min.js', false, FCWP_VERSION, true );
	    wp_enqueue_script( 'child-scripts.min.js' );
	    if( is_page( 'about' ) ) {
	    	wp_register_script( 'gmap-api.js', '//maps.googleapis.com/maps/api/js?sensor=true&#038;ver=1.0', false, FCWP_VERSION, true );
	    	wp_enqueue_script( 'gmap-api.js' );
	    	wp_register_script( 'gmap.js', FCWP_CHILD_STYLESHEETURI . '/js/lib/gmap.min.js', array('gmap-api.js'), FCWP_VERSION, true );
	    	wp_enqueue_script( 'gmap.js' );
	    }
	    // comment reply
	    if( is_singular() && 'portfolio' == get_post_type() ) :
	    	wp_register_script( 'optimizely', '//cdn.optimizely.com/js/3273730023.js', false, FCWP_VERSION, false );
	    	wp_enqueue_script( 'optimizely' );
	    	wp_register_script( 'fitvid.js', FCWP_CHILD_STYLESHEETURI . '/js/vendor/fitvids.js', false, FCWP_VERSION, true );
	    	wp_enqueue_script( 'fitvid.js' );
	    endif;
	}
	add_action( 'wp_enqueue_scripts', 'fcwp_load_child_javascript' );
endif;

/* Sidebar Widget Area
===============================================================================*/
if( !function_exists( 'fcwp_register_custom_sidebars' ) ) :
	function fcwp_register_custom_sidebars() {
	    register_sidebar( array(
	        'name'          => __( 'Sidebar', FCWP_TAXDOMAIN ),
	        'id'            => 'sidebar',
	        'description'   => '',
	        'class'         => '',
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</li>',
	        'before_title'  => '<h2 class="widgettitle">',
	        'after_title'   => '</h2>'
	    ));
	}
	add_action( 'widgets_init', 'fcwp_register_custom_sidebars' );
endif;
/* Portfolio Details
================================================================================*/
function portfolio_details( $label, $text ) {
	$string = '<h2 class="details__heading">' . __( $label, FCWP_TAXDOMAIN ) . '</h2><p>' . $text . '</p>';
	return $string;
}
/*---------------------------------------------------------
 * Redirect from CPT singles
---------------------------------------------------------*/
add_action( 'template_redirect', 'wpse_128636_redirect_post' );
function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'team-member' ==  $queried_post_type || 'team-member' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}