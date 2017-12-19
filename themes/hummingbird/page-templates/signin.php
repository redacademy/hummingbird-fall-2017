<?php
/**
 * Template Name: Signin Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-signin">
		<main id="main" class="site-main" role="main">

			<section class="width-content signin-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				<h1>Sign In</h1>
			</section>

			<section class="signin-form width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" >Forgot your password?</a></p>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
