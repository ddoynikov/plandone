<?php
/**
 * plandone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package plandone
 */

if ( ! function_exists( 'plandone_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function plandone_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on plandone, use a find and replace
		 * to change 'plandone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'plandone', get_template_directory() . '/languages' );

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

		add_image_size('post_thumbnail', 1300, 500, true); // Превьюшка в блоге

		add_filter('excerpt_more', function($more) { // Добавляем многоточие после обрезания текста
				return ' ...';
			});

		add_filter( 'excerpt_length', function(){ // Обрезаем текст
			return 35;
		} );

		// удаляет H2 из шаблона пагинации
		add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
		function my_navigation_template( $template, $class ){
			/*
			Вид базового шаблона:
			<nav class="navigation %1$s" role="navigation">
				<h2 class="screen-reader-text">%2$s</h2>
				<div class="nav-links">%3$s</div>
			</nav>
			*/

			return '
			<nav class="navigation %1$s" role="navigation">
				<div class="nav-links">%3$s</div>
			</nav>    
			';
		} 

		add_filter( 'document_title_separator', 'my_sep' );
			function my_sep( $sep ){
				$sep = ' | ';

				return $sep;
			}
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-main' => esc_html__( 'header-main', 'plandone' ),
			'footer' => esc_html__( 'Footer Menu', 'plandone' )
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'plandone_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'plandone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function plandone_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'plandone_content_width', 640 );
}
add_action( 'after_setup_theme', 'plandone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function plandone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Сайдбар в блоге', 'plandone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Добавить виджеты здесь', 'plandone' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'plandone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function plandone_scripts() {
	wp_enqueue_style( 'plandone-style', get_stylesheet_uri() );

	wp_enqueue_style('plandone-main', get_template_directory_uri() . '/assets/styles/main.css');

	wp_deregister_script( 'jquery' );

	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'plandone-parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array(), '1.0', true );

	wp_enqueue_script( 'plandone-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

	wp_enqueue_script( 'plandone-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array(), '1.0', true );

	wp_enqueue_script( 'plandone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'plandone_scripts' );

/**
 * Подключение Redux
 */
	require get_template_directory() . '/inc/redux-options.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




