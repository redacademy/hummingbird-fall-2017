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

			<section class="width-content">
				<h1><?php echo CFS()->get( 'action_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'action_header_content' ); ?></p>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'action_call' ); ?></h1>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
