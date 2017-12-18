<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Hummingbird_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function hummingbird_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'hummingbird_body_classes' );

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
	}
}
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

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

