<?php
/**
 * kairav functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kairav
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
function kairav_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on kairav, use a find and replace
		* to change 'kairav' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kairav', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'kairav' ),
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
			'kairav_custom_background_args',
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
add_action( 'after_setup_theme', 'kairav_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kairav_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kairav_content_width', 640 );
}
add_action( 'after_setup_theme', 'kairav_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kairav_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kairav' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kairav' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kairav_widgets_init' );


if(function_exists('acf_add_options_page') ){
	acf_add_options_page(array(
		'page_title' 	=> 'Kairav General Settings',
		'menu_title'	=> 'Kairav Settings',
		'menu_slug' 	=> 'Kairav-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Kairav Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'Kairav-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Kairav Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'Kairav-general-settings',
	));

}

/**
 * Enqueue scripts and styles.
 */
function kairav_scripts() {
	wp_enqueue_style( 'kairav-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kairav-style', 'rtl', 'replace' );

	wp_enqueue_style( 'kairav-style1', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'kairav-style2', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'google-fonts1', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap', true );
	wp_enqueue_style( 'google-fonts2', 'https://fonts.googleapis.com/css2?family=League+Gothic&display=swap', true );
	wp_enqueue_style( 'google-fonts3', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap', true );
	wp_enqueue_style( 'google-fonts4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=5.8.3', true );

	wp_deregister_script('jquery');
	wp_register_script('jquery',  get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'kairav-navigation1', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kairav-navigation2', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kairav-navigation3', get_template_directory_uri() . '/js/jquery-migrate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kairav-navigation4', get_template_directory_uri() . '/js/customizer.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kairav-navigation5', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'kairav-navigation5',  'https://kit.fontawesome.com/a501fc6766.js', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kairav_scripts' );

function causes_posttype() {
 
	register_post_type( 'causes',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Causes' ),
				'singular_name' => __( 'Causes' )
			),
			'description' => 'Causes',
			'public' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'rewrite' => array('slug' => 'causes'),
			'show_in_rest' => true,
			'supports' => array( 'title' ),

		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'causes_posttype' );

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

/**
 * Custom AFC Gutenberg block category.
 */
require get_template_directory() . '/inc/acf-blocks/starter-kit-register-block-category.php';

/**
 * Custom AFC Gutenberg blocks.
 */
require get_template_directory() . '/inc/acf-blocks/starter-kit-register-acf-blocks.php';

/**
 * Custom render callback function for AFC Gutenberg blocks.
 */
require get_template_directory() . '/inc/acf-blocks/starter-kit-render-callback.php';

define('TEMPATH', get_bloginfo('template_directory'));
	define('DEFAULT_IMAGE', TEMPATH . '/images/default_image.png');

