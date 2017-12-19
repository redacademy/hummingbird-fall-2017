<?php
/**
 * Template Name: Volunteer Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-volunteer">
		<main id="main" class="site-main" role="main">

			<section class="width-content volunteer-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/wolf.svg">
				<h1>Start Making an Impact!</h1>
			</section>

			<section class="volunteer-form width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" >Forgot your password?</a></p>
				<?php endwhile; // End of the loop. ?>
			</section>
				
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
