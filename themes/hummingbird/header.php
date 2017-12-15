<?php
/**
 * The header for our theme.
 *
 * @package Hummingbird_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
	<?php wp_head(); ?>
	 
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle">Menu</button>
					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hb-logo">
							<img class="logo-color"src="<?php echo get_template_directory_uri(); ?>/assets/logos/medium/logo-color-medium.png" alt="hummingbird header logo">
							<img class="logo-white"src="<?php echo get_template_directory_uri(); ?>/assets/logos/medium/logo-white-medium.png" alt="hummingbird header logo">
						</a>
					</div><!-- .site-branding -->
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
				