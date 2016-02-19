<?php
/**
 * blank.ly functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blank.ly
 */


// Define some constants that we will use throughout the framework
if(defined('ABSPATH')) {

	// No direct access
	define('ZEN_ALLOW', 1);
	
	// A Joomla constant to provide a small measure compat between existing themes
	define('_JEXEC',1);
	
	// Define the framework we are in
	define('WP', 1);
	define('JOOMLA', 0);
	
	// Set the Theme Name
	define('TEMPLATE', basename(dirname(__FILE__)));
	
	// SET the site root
	define( 'ROOT_PATH', ABSPATH);
		
	// Set the theme path
	define( 'TEMPLATE_PATH', get_template_directory().'/');
	define( 'TEMPLATE_PATH_RELATIVE', 'wp-content/themes/'.TEMPLATE);
	define('FRAMEWORK_PATH', get_template_directory().'/zengrid');
	define( 'SITE_URL', get_template_directory_uri());
	define( 'ADMIN_MEDIA_URI', get_template_directory_uri().'/zengrid/admin');
	

} else {
	
	 die("You do not have permission to acces this file.");

}


include_once FRAMEWORK_PATH . '/helpers/helper.php'; 
include_once FRAMEWORK_PATH . '/zen.php'; 
$zgf = new zen();
$zen = new zen4();


$data = $zgf->get_xml('templateDetails.xml');

// Positions used
$positions = $data->positions;
$positions = (array)$positions[0];
$positions = $positions['position'];


// Thme name
$theme = strtolower(str_replace(' ', '-', $data->name));


if($data->compat) {
	include_once FRAMEWORK_PATH . '/helpers-wp/compat.php';
}

foreach($positions as $key=>$sb) {
	
	register_sidebar(array('name'=> $sb,
		'id'=> $sb,
		'before_widget' => '<div class="moduletable"><div class="module-inner"><div class="zen-module-body">',
		'after_widget' => '</div></div></div>',
		'before_title' => '<div class="zen-module-title"><h3>',
		'after_title' => '</h3></div>',
	));
}




add_filter( 'the_content_more_link', 'modify_read_more_link' );

function modify_read_more_link() {
	
	return '<a class="readon btn btn-primary" href="' . get_permalink() . '">Read More</a>';
}



if ( ! function_exists( $theme.'_setup' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blankly_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on blank.ly, use a find and replace
	 * to change 'blankly' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blankly', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'blankly' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );


}
endif;
add_action( 'after_setup_theme', 'blankly_setup' );


/**
 * Enqueue scripts and styles.
 */
if(!is_admin()) {
	
	
	function blankly_scripts() {
		
		
		wp_enqueue_script("jquery");
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
	}
	add_action( 'wp_enqueue_scripts', 'blankly_scripts' );
}



/**
* Lazyload
*/

	if($zen->params->lazyload) {

	function filter_lazyload($content) {
	    return preg_replace_callback('/(<\s*img[^>]+)(src\s*=\s*"[^"]+")([^>]+>)/i', 'preg_lazyload', $content);
	}
	add_filter('the_content', 'filter_lazyload');
	
	
	function preg_lazyload($img_match) {
	 
	    $img_replace = $img_match[1] . 'src="' . get_stylesheet_directory_uri() . '/images/placeholder.gif" data-original' . substr($img_match[2], 3) . $img_match[3];
	 
	    $img_replace = preg_replace('/class\s*=\s*"/i', 'class="lazy ', $img_replace);
	 
	    $img_replace .= '<noscript>' . $img_match[0] . '</noscript>';
	    return $img_replace;
	}
	}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/breadcrumbs.php';




/**
 * Theme Admin Js
 *
*/

function load_admin_js(){
    // Unfortunately we can't just enqueue our scripts here - it's too early. So register against the proper action hook to do it
    add_action( 'admin_enqueue_scripts', 'enqueue_admin_js' );
}

add_action( 'admin_menu', 'load_admin_js' );

function enqueue_admin_js(){}



function ajax_save() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-save.php');
}

function ajax_compile() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-compile.php');
}

function ajax_set_layout() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-layout.php');
}

function ajax_delete_theme() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-delete-theme.php');
}

function ajax_delete_config() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-delete-config.php');
}

function ajax_compress() {
	include_once(FRAMEWORK_PATH . '/helpers-wp/ajax-compress.php');
}

// Add the menu for theme options
function blankly_theme_options() {
	add_theme_page( 'Theme Options', 'Blank.ly', 'edit_theme_options', 'theme_options', 'theme_options_page' );
}

function theme_options_page() {
	// Load the main page required for the options
	require_once ( FRAMEWORK_PATH . '/config/config.php' );
}

// Ajax Actions
add_action( 'wp_ajax_save', 'ajax_save', 10, 2 );
add_action( 'wp_ajax_compile', 'ajax_compile', 10, 2 );
add_action( 'wp_ajax_compress', 'ajax_compress', 10, 2 );
add_action( 'wp_ajax_set_layout', 'ajax_set_layout', 10, 2 );
add_action( 'wp_ajax_delete_theme', 'ajax_delete_theme', 10, 2 );
add_action( 'wp_ajax_delete_config', 'ajax_delete_config', 10, 2 );

// Add the menu item
add_action( 'admin_menu', 'blankly_theme_options' );


