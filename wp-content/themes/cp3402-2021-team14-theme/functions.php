<?php
/**
 * CP3402 2021 Team14 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CP3402_2021_Team14_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.7' );
}

if ( ! function_exists( 'cp3402_2021_team14_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cp3402_2021_team14_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CP3402 2021 Team14 Theme, use a find and replace
		 * to change 'cp3402-2021-team14-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cp3402-2021-team14-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'cp3402-2021-team14-theme' ),
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
				'cp3402_2021_team14_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'cp3402_2021_team14_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cp3402_2021_team14_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cp3402_2021_team14_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'cp3402_2021_team14_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cp3402_2021_team14_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cp3402-2021-team14-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cp3402-2021-team14-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
        array(
            'name'          => esc_html__( 'Program Sidebar', 'cp3402-2021-team14-theme' ),
            'id'            => 'sidebar-2',
            'description'   => esc_html__( 'Add widgets here.', 'cp3402-2021-team14-theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'cp3402_2021_team14_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cp3402_2021_team14_theme_scripts() {

    // Enqueue Google Fonts: Source Sans Pro, PT Seriff and Limelight
    wp_enqueue_style('jazzclub-fonts','https://fonts.googleapis.com/css2?family=Limelight&family=PT+Serif:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:ital,wght@0,200;0,700;1,400&display=swap' );

	wp_enqueue_style( 'cp3402-2021-team14-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cp3402-2021-team14-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cp3402-2021-team14-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cp3402_2021_team14_theme_scripts' );

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

function festivalPosts() {
    $args = array( 'posts_per_page' => 1, 'category_name' => 'festival');
    $festival_posts_query = new WP_Query( $args );
    while($festival_posts_query->have_posts()) :
        $festival_posts_query->the_post();
        get_template_part( 'template-parts/content', get_post_type() );
//        $link = get_permalink();
//        $title = get_the_title();
//        $date = get_the_date();
//
//        $content .= '<div class="latest-posts">';
//        $content .= '<h3><a href='.$link.' target="_top">'.$title.' /' .$date. '</a></h3>';
//        $content .= '<p class="excerpt">' .get_the_excerpt(). '</p>';
//        $content .= '</div>';

    endwhile;

//    return $content;
}

add_shortcode('festivalPosts', 'festivalPosts');

