<?php
/**
 * ua-teens functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ua-teens
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

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
function ua_teens_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ua-teens, use a find and replace
		* to change 'ua-teens' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ua-teens', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ua-teens' ),
			'menu-2' => esc_html__( 'Programs Footer', 'ua-teens' ),
			'menu-3' => esc_html__( 'Info Footer', 'ua-teens' ),
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
			'ua_teens_custom_background_args',
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
add_action( 'after_setup_theme', 'ua_teens_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ua_teens_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ua_teens_content_width', 640 );
}
add_action( 'after_setup_theme', 'ua_teens_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function ua_teens_scripts() {
	wp_enqueue_style( 'ua-teens-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'mapbox', 'https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.css' );
	wp_enqueue_style( 'ua-teens-style-main', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'mapbox-gl', 'https://api.mapbox.com/mapbox-gl-js/v3.2.0/mapbox-gl.js', array('jquery'), '0.49.0', true );
/*	wp_enqueue_script( 'ua-teens-form-short', 'https://forms.plumsail.com/api/widget/f8b4b65f-a4c2-49de-83bc-5e5d44ca6920', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ua-teens-form-long', 'https://forms.plumsail.com/api/widget/f22ae698-edf1-4436-b11e-751a1a34a050', array('jquery'), _S_VERSION, true );*/
	wp_enqueue_script( 'ua-teens-main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ua_teens_scripts' );

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
 * Custom post types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Poly translation
 */
require get_template_directory() . '/inc/poly-translation.php';

/**
 * Ajax content
 */
require get_template_directory() . '/inc/ajax-content.php';

/**
 * Carbon fields
 */
require get_template_directory() . '/inc/carbon-init.php';

/**
 * Custom login
 */
require get_template_directory() . '/inc/custom-login-page.php';

/**
 * Variables
 */
define( 'SITE_URL', get_site_url() );
define( 'SITE_LOCALE', get_locale() );
define( 'THEME_PATH', get_template_directory_uri() );



