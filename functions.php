<?php
/**
 * mirage-event functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mirage-event
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
function mirage_event_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mirage-event, use a find and replace
		* to change 'mirage-event' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mirage-event', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mirage-event' ),
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
			'mirage_event_custom_background_args',
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
add_action( 'after_setup_theme', 'mirage_event_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mirage_event_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mirage_event_content_width', 640 );
}
add_action( 'after_setup_theme', 'mirage_event_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mirage_event_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mirage-event' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mirage-event' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mirage_event_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mirage_event_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/src/dist/css/style.css', false, '1.1', 'all');
	wp_style_add_data( 'style', 'rtl', 'replace' );
	wp_enqueue_style( 'default_style', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
	wp_style_add_data( 'default_style', 'rtl', 'replace' );

	wp_enqueue_script( 'wow.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js?_v=20221201010352', false, '1.1', true );
	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/src/dist/js/app.min.js', false, '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'mirage_event_scripts' );

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




$places_labels = array(
	'name' => 'Площадки',
	'singular_name' => 'Площадка',
	'add_new' => 'Добавить площадку',
	'add_new_item' => 'Добавить площадку',
	'edit_item' => 'Редактировать площадку',
	'new_item' => 'Новая площадка',
	'all_items' => 'Все площадки',
	'search_items' => 'Искать площадки',
	'not_found' =>  'Площадок по заданным критериям не найдено.',
	'not_found_in_trash' => 'В корзине нет площадок.',
	'menu_name' => 'Площадки'
);

$places_args = array(
	'labels' => $places_labels,
	'public' => true,
	'publicly_queryable' => true,
	'has_archive' => false,
	'menu_icon' => 'dashicons-editor-table',
	'menu_position' => 4,
	'supports' => array( 'title' )
);

register_post_type( 'places', $places_args );



$kases_labels = array(
	'name' => 'Кейсы',
	'singular_name' => 'Кейс',
	'add_new' => 'Добавить кейс',
	'add_new_item' => 'Добавить кейс',
	'edit_item' => 'Редактировать кейс',
	'new_item' => 'Новый кейс',
	'all_items' => 'Все кейсы',
	'search_items' => 'Искать кейс',
	'not_found' =>  'Кейсов по заданным критериям не найдено.',
	'not_found_in_trash' => 'В корзине нет кейсов.',
	'menu_name' => 'Кейсы'
);

$kases_args = array(
	'labels' => $kases_labels,
	'public' => true,
	'publicly_queryable' => true,
	'has_archive' => false,
	'menu_icon' => 'dashicons-lightbulb',
	'menu_position' => 4,
	'supports' => array( 'title' )
);

register_post_type( 'kases', $kases_args );

$services_labels = array(
	'name' => 'Услуги',
	'singular_name' => 'Услуга',
	'add_new' => 'Добавить услугу',
	'add_new_item' => 'Добавить услугу',
	'edit_item' => 'Редактировать услугу',
	'new_item' => 'Новая услугу',
	'all_items' => 'Все услуги',
	'search_items' => 'Искать услугу',
	'not_found' =>  'Услуг по заданным критериям не найдено.',
	'not_found_in_trash' => 'В корзине нет услуг.',
	'menu_name' => 'Услуги'
);

$services_args = array(
	'labels' => $services_labels,
	'public' => true,
	'publicly_queryable' => true,
	'has_archive' => false,
	'menu_icon' => 'dashicons-lightbulb',
	'menu_position' => 4,
	'supports' => array( 'title' )
);

register_post_type( 'services', $services_args );



$clients_labels = array(
	'name' => 'Клиенты',
	'singular_name' => 'Клиенты',
	'add_new' => 'Добавить клиента',
	'add_new_item' => 'Добавить клиента',
	'edit_item' => 'Редактировать клиента',
	'new_item' => 'Новый клиент',
	'all_items' => 'Все клиенты',
	'search_items' => 'Искать клиента',
	'not_found' =>  'Клиентов по заданным критериям не найдено.',
	'not_found_in_trash' => 'В корзине нет клиентов.',
	'menu_name' => 'Клиенты'
);

$clients_args = array(
	'labels' => $clients_labels,
	'public' => true,
	'publicly_queryable' => true,
	'has_archive' => false,
	'menu_icon' => 'dashicons-lightbulb',
	'menu_position' => 4,
	'supports' => array( 'title' )
);

register_post_type( 'clients', $clients_args );



$reviews_labels = array(
	'name' => 'Отзывы',
	'singular_name' => 'Отзывы',
	'add_new' => 'Добавить отзыв',
	'add_new_item' => 'Добавить отзыв',
	'edit_item' => 'Редактировать отзыв',
	'new_item' => 'Новый отзыв',
	'all_items' => 'Все отзывы',
	'search_items' => 'Искать отзыв',
	'not_found' =>  'Отзывов по заданным критериям не найдено.',
	'not_found_in_trash' => 'В корзине нет отзывов.',
	'menu_name' => 'Отзывы'
);

$reviews_args = array(
	'labels' => $reviews_labels,
	'public' => true,
	'publicly_queryable' => true,
	'has_archive' => false,
	'menu_icon' => 'dashicons-lightbulb',
	'menu_position' => 4,
	'supports' => array( 'title' )
);

register_post_type( 'reviews', $reviews_args );
