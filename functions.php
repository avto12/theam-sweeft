<?php
/**
 * Theam-sweeft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theam-sweeft
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theam_sweeft_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Theam-sweeft, use a find and replace
		* to change 'theam-sweeft' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'theam-sweeft', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'theam-sweeft' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'theam_sweeft_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);


 


 
}
add_action( 'after_setup_theme', 'theam_sweeft_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theam_sweeft_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theam_sweeft_content_width', 640 );
}
add_action( 'after_setup_theme', 'theam_sweeft_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theam_sweeft_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theam-sweeft' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theam-sweeft' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'theam_sweeft_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theam_sweeft_scripts() {
	wp_enqueue_style( 'theam-sweeft-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style(	'pr-bootsrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css', array(), '5.2.1', false);
	wp_enqueue_style(	'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), false);
	wp_enqueue_style(	'my-style', get_template_directory_uri() . '/style-main.css', array(), false);
 
	wp_style_add_data( 'theam-sweeft-style', 'rtl', 'replace' );


	wp_enqueue_script(	'swper-slider', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script(	'swper-slider', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js', array(), '1.0.0', true);
	wp_enqueue_script(	'main_js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'theam-sweeft-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script(	'pr-bootsrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js', array(), '5.2.1', false);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theam_sweeft_scripts' );

 
 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}
  
	$filetype = wp_check_filetype( $filename, $mimes );
  
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );



  function wpsweeft_init_widgets($id) 	{

    register_sidebar( array(
        'name'          =>  'logo',
        'id'            =>  'box1',
        'before_widget' =>  '<div class="box"',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>',
    ));
	}


add_action('widgets_init', 'wpsweeft_init_widgets');



//  Start excerpt lenght function -----------
function excerpt_len( $text='' )
{
 
    $excerpt_length = apply_filters('excerpt_length', 10);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '...');
    return wp_trim_words( $text, $excerpt_length, $excerpt_more );
}
add_filter('wp_trim_excerpt', 'excerpt_len');


 
	/**
 * AFC Block----
 */


require_once(__DIR__ . '/template-parts/custome-block.php');
 


if( function_exists('acf_add_options_page') ) {

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'footer',
			'menu_title'	=> 'Footer',
			'menu_slug' 	=> 'footer',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	};
	
};

add_filter( 'wpcf7_recaptcha_threshold',
 
  function( $threshold ) {
    $threshold = 0.3; // decrease threshold to 0.3
 
    return $threshold;
  },
 
  10, 1
);
 
 

 
  
 

 