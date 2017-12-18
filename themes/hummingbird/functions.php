<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hummingbird_Theme
 */

if ( ! function_exists( 'hummingbird_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function hummingbird_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // hummingbird_setup
add_action( 'after_setup_theme', 'hummingbird_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function hummingbird_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hummingbird_content_width', 640 );
}
add_action( 'after_setup_theme', 'hummingbird_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hummingbird_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hummingbird_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function hummingbird_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'hummingbird_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function hummingbird_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hummingbird_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );
 
/**
 * Custom function that changes the value of the greeting in the backend of wordpress.
 */

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$profile_url = get_edit_profile_url( $user_id );
 
if ( 0 != $user_id ) {
/* Add the "My Account" menu */
$avatar = get_avatar( $user_id, 28 );
$howdy = sprintf( __('Aloha, %1$s'), $current_user->display_name );
$class = empty( $avatar ) ? '' : 'with-avatar';
 
$wp_admin_bar->add_menu( array(
'id' => 'my-account',
'parent' => 'top-secondary',
'title' => $howdy . $avatar,
'href' => $profile_url,
'meta' => array(
'class' => $class,
),
) );
 
// SIGN IN PAGE (PASSWORD IS SHOWING. NEEDS TO BE FIXED)
// http://smallenvelop.com/how-to-get-password-fields-in-contact-form-7/
function cfp($atts, $content = null) {
	extract(shortcode_atts(array( "id" => "", "title" => "", "pwd" => "" ), $atts));

	if(empty($id) || empty($title)) return "";

	$cf7 = do_shortcode('[contact-form-7 404 "Not Found"]');

	$pwd = explode(',', $pwd);
	foreach($pwd as $p) {
			$p = trim($p);

			$cf7 = preg_replace('/<input type="text" name="' . $p . '"/usi', '<input type="password" name="' . $p . '"', $cf7);
	}

	return $cf7;
}
add_shortcode('cfp', 'cfp');

}
wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20160909', true );
}
function hn_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/large/logo-color-large.png);
					height:65px;
					width:320px;
					background-size: 320px 95px;
					background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'hn_login_logo' );

function hn_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'hn_login_logo_url' );

function hn_login_logo_url_title() {
    return 'Visit Hummingbird Network';
}
add_filter( 'login_headertitle', 'hn_login_logo_url_title' );

function hn_enqueue_google_fonts() { 
	wp_enqueue_style( 'merriweather', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700' ); 
	wp_enqueue_style( 'overpass', 'https://fonts.googleapis.com/css?family=Overpass:200,300,400,400i,700' ); 
}
add_action( 'wp_enqueue_scripts', 'hn_enqueue_google_fonts' ); 