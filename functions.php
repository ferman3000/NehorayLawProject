<?php
/**
 * NehorayNew functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NehorayNew
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
function nehoraynew_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on NehorayNew, use a find and replace
		* to change 'nehoraynew' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nehoraynew', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nehoraynew' ),
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
			'nehoraynew_custom_background_args',
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
add_action( 'after_setup_theme', 'nehoraynew_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nehoraynew_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nehoraynew_content_width', 640 );
}
add_action( 'after_setup_theme', 'nehoraynew_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nehoraynew_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nehoraynew' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nehoraynew' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nehoraynew_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nehoraynew_scripts() {
	wp_enqueue_style( 'nehoraynew-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'nehoraynew-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'nehoraynew-layout', get_template_directory_uri() . '/assets/css/layout.css', array(), _S_VERSION );

// Conditional Load for Home Page (Front Page)
    if ( is_front_page() ) {
        wp_enqueue_style( 'nehoray-home', get_template_directory_uri() . '/assets/css/home.css', array('nehoraynew-style'), _S_VERSION );
    }
    // Conditional Load for Attorneys Page
    if ( is_page_template( 'page-attorneys.php' ) || is_page('attorneys') ) {
        wp_enqueue_style( 'nehoray-attorneys', get_template_directory_uri() . '/assets/css/attorneys.css', array(), _S_VERSION );
    }

	// Conditional Load for Contact Page
    if ( is_page_template( 'page-contact.php' ) || is_page('contact') ) {
        wp_enqueue_style( 'nehoray-contact', get_template_directory_uri() . '/assets/css/contact.css', array('nehoraynew-style'), _S_VERSION );
    }

    // Conditional Load for Testimonies Page
    if ( is_page_template( 'page-testimonies.php' ) || is_page('testimonies') ) {
        wp_enqueue_style( 'nehoray-testimonies', get_template_directory_uri() . '/assets/css/testimonies.css', array('nehoraynew-style'), _S_VERSION );
    }

	wp_style_add_data( 'nehoraynew-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nehoraynew-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'nehoraynew-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

    wp_localize_script( 'nehoraynew-main', 'nehorayData', array(
        'themeUrl' => get_template_directory_uri()
    ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nehoraynew_scripts' );

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
 * Custom Post Type: Practice Areas (Services)
 */
function nehoray_register_practice_areas() {
	$labels = array(
		'name'                  => 'Practice Areas',
		'singular_name'         => 'Practice Area',
		'menu_name'             => 'Practice Areas',
		'add_new'               => 'Add New',
		'add_new_item'          => 'Add New Practice Area',
		'edit_item'             => 'Edit Practice Area',
		'new_item'              => 'New Practice Area',
		'view_item'             => 'View Practice Area',
		'search_items'          => 'Search Practice Areas',
		'not_found'             => 'No practice areas found',
		'not_found_in_trash'    => 'No practice areas found in Trash',
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ), // Title used for H3, Editor for Paragraph
		'public'                => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer', 
		'show_in_rest'          => true,
		'has_archive'           => false,
	);
	register_post_type( 'practice_area', $args );
}
add_action( 'init', 'nehoray_register_practice_areas' );

/**
 * ACF Fields Registration (Code-based for consistency)
 */
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_nehoray_practice_area',
		'title' => 'Service Card Details',
		'fields' => array(
			array(
				'key' => 'field_service_icon_svg',
				'label' => 'SVG Icon Code',
				'name' => 'service_icon',
				'type' => 'textarea',
				'instructions' => 'Paste the full <svg> code here. It will be rendered inline to preserve CSS.',
				'required' => 1,
				'rows' => 4,
				'new_lines' => '', // Important: No wpautop
			),
			array(
				'key' => 'field_service_link_text',
				'label' => 'Link Text',
				'name' => 'link_text',
				'type' => 'text',
				'instructions' => 'e.g. "Consult About Injury"',
				'default_value' => 'Consult About Case',
				'required' => 1,
			),
			array(
				'key' => 'field_service_link_url',
				'label' => 'Link URL',
				'name' => 'link_url',
				'type' => 'text', // Text allows anchors (#contact) and relative paths
				'instructions' => 'Enter custom URL or anchor (e.g. /personal-injury or #contact). Default: #contact',
				'default_value' => '#contact',
				'required' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'practice_area',
				),
			),
		),
	));
	
endif;
