<?php
/**
 * libertex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package libertex
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
function lbrtx_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on libertex, use a find and replace
		* to change 'lbrtx' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lbrtx', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'lbrtx' ),
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
			'lbrtx_custom_background_args',
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
add_action( 'after_setup_theme', 'lbrtx_setup' );

add_filter('show_admin_bar', '__return_false');

get_template_part("inc/scripts");
get_template_part("inc/functions");
get_template_part("inc/blocks");
get_template_part("inc/cpt");

function acf_filter_rest_api_preload_paths( $preload_paths ) {
	global $post;
	$rest_path    = rest_get_route_for_post( $post );
	$remove_paths = array(
			add_query_arg( 'context', 'edit', $rest_path ),
			sprintf( '%s/autosaves?context=edit', $rest_path ),
	);

	return array_filter(
			$preload_paths,
			function( $url ) use ( $remove_paths ) {
					return ! in_array( $url, $remove_paths, true );
			}
	);
}
add_filter( 'block_editor_rest_api_preload_paths', 'acf_filter_rest_api_preload_paths', 10, 1 );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if( function_exists('acf_add_options_page') ) {
    
	acf_add_options_page(array(
			'page_title'    => __('Настройки темы'),
			'menu_title'    => __('Настройки темы'),
			'menu_slug'     => 'theme-general-settings',
			'capability'    => 'edit_posts',
			'redirect'      => false
	));
	
}