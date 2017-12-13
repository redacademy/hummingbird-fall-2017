<?php
/**
 * 
 * Template Name: Action Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-action">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<section class="width-content action-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/deer.svg">
				<h1><?php echo CFS()->get( 'action_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'action_header_content' ); ?></p>
			</section>

			<section class="width-content steps">
				<h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				Set your own schedule</span></h2>
                <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				Work from anywhere</span></h2>
                <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				You decide how much you volunteer</span></h2>
			</section>
                <h1>Start making an impact in three simple steps.</h1>
			<section class="width-content call">
			  <div class="call-to-action">
				<h2>Register</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-clipboard.svg">
			  </div>
			  <div class="call-to-action">
				<h2>Analyze Photos</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-phone.svg">
			  </div>
			  <div class="call-to-action">
				<h2>Save communities</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-magnify.svg">
			  </div>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'action_call' ); ?></h1>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
