<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

/**
 * Portfolio only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if ( ! function_exists( 'wp5default_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp5default_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Portfolio, use a find and replace
		 * to change 'wp5default' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wp5default', get_template_directory() . '/languages' );

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'top' => __( 'Primary', 'wp5default' ),
				'footer' => __( 'Footer Menu', 'wp5default' ),
				'social' => __( 'Social Links Menu', 'wp5default' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 300,
				'width'       => 300,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'wp5default' ),
					'shortName' => __( 'S', 'wp5default' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'wp5default' ),
					'shortName' => __( 'M', 'wp5default' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'wp5default' ),
					'shortName' => __( 'L', 'wp5default' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'wp5default' ),
					'shortName' => __( 'XL', 'wp5default' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'wp5default' ),
					'slug'  => 'primary',
					'color' => wp5default_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 33 ),
				),
				array(
					'name'  => __( 'Secondary', 'wp5default' ),
					'slug'  => 'secondary',
					'color' => wp5default_hsl_hex( 'default' === get_theme_mod( 'primary_color' ) ? 199 : get_theme_mod( 'primary_color_hue', 199 ), 100, 23 ),
				),
				array(
					'name'  => __( 'Dark Gray', 'wp5default' ),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __( 'Light Gray', 'wp5default' ),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __( 'White', 'wp5default' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'wp5default_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp5default_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Site Banner Area', 'wp5default' ),
			'id'            => 'site-banner',
			'description'   => __( 'Primarily a location for banner and slideshow widgets.', 'wp5default' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="title">',
			'after_title'   => '</h1>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'wp5default' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your blog sidebar.', 'wp5default' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'wp5default_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function wp5default_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wp5default_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp5default_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function wp5default_scripts() {

	wp_enqueue_style( 'wp5default-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'wp5default-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//Fonts
	wp_enqueue_style( 'wp5default-google-fonts', '//fonts.googleapis.com/css?family=Raleway' );

	// Social Menu
	wp_enqueue_style( 'wp5default-social-menu', get_template_directory_uri() . '/assets/css/social-menu.css');

	//Font Awesome
	wp_enqueue_style( 'wp5default-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

	// Scripts
	wp_enqueue_script( 'scwd-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp5default_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function wp5default_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'wp5default_skip_link_focus_fix' );

/**
 * Enqueue supplemental block editor styles.
 */
function wp5default_editor_customizer_styles() {

	wp_enqueue_style( 'wp5default-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.0', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'wp5default-editor-customizer-styles', wp5default_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'wp5default_editor_customizer_styles' );

/**
 * Display custom color CSS in customizer and on frontend.
 */
function wp5default_colors_css_wrap() {

	// Only include custom colors in customizer or frontend.
	if ( ( ! is_customize_preview() && 'default' === get_theme_mod( 'primary_color', 'default' ) ) || is_admin() ) {
		return;
	}

	require_once get_parent_theme_file_path( '/inc/color-patterns.php' );

	$primary_color = 199;
	if ( 'default' !== get_theme_mod( 'primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'primary_color_hue', 199 );
	}
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		<?php echo wp5default_custom_colors_css(); ?>
	</style>
	<?php
}
add_action( 'wp_head', 'wp5default_colors_css_wrap' );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-wp5default-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-wp5default-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme options shortcode generator.
 */
require get_template_directory() . '/inc/shortcode-generator.php';


require get_template_directory() . '/inc/custom-post-types.php';

add_filter( 'body_class', 'inner_body_class' );

function inner_body_class( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'inner';
	}
	return $classes;
}

//Fixed Script & CSS type warning in validation.
add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'", 'type="text/css"', "type='text/css'" ), '', $buffer );

        return $buffer;
    });
});

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_action('wp_loaded', 'output_buffer_start');
function output_buffer_start() { 
    ob_start("output_callback"); 
}

add_action('shutdown', 'output_buffer_end');
function output_buffer_end() { 
    ob_end_flush(); 
}

function output_callback($buffer) {
    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
}



add_action( 'template_redirect', function(){
    ob_start( function( $buffer ){
        $buffer = str_replace( array( 'sizes="(max-width: 265px) 100vw, 265px"' ), '', $buffer );

        return $buffer;
    });
});


add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'post', 'excerpt' );
}

add_action( 'init', 'my_remove_post_type_support', 10 );
function my_remove_post_type_support() {
    remove_post_type_support( 'post', 'post-formats' );
}

// function change_post_menu_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'Products';
//     $submenu['edit.php'][5][0] = 'Products';
//     $submenu['edit.php'][10][0] = 'Add Product';
//     $submenu['edit.php'][16][0] = 'Tags';
//     echo '';
// }
// add_action( 'admin_menu', 'change_post_menu_label' );
// // Function to change post object labels to "news"
// function change_post_object_label() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'Products';
//     $labels->singular_name = 'Product';
//     $labels->add_new = 'Add Product';
//     $labels->add_new_item = 'Add Product';
//     $labels->edit_item = 'Edit Product';
//     $labels->new_item = 'Product';
//     $labels->view_item = 'View Product';
//     $labels->search_items = 'Search Products';
//     $labels->not_found = 'No Products found';
//     $labels->not_found_in_trash = 'No Products found in Trash';
// }
// add_action( 'init', 'change_post_object_label' );