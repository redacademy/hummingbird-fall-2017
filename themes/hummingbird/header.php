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
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i|Overpass:300,300i,400,400i,700" rel="stylesheet">
		
	<?php wp_head(); ?>
	 
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site page-header">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
				<!-- <div class="hb-logo"> -->
						<nav id="site-navigation" class="main-navigation" role="navigation">
								
						<!-- </div> -->

							<button class="menu-toggle">Menu</button>
						
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/SVG/hummingbird-network-logo-color.svg" alt="hummingbird header logo">

						</nav>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->
					
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
				