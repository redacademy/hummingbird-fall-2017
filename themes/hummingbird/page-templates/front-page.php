<?php
/**
 * Template Name: Front Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-front-page">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<?php echo CFS()->get( 'front_page_header_title' ); ?>
			<?php echo CFS()->get( 'front_page_header_content' ); ?>

			<?php echo CFS()->get( 'front_page_description_title' ); ?>
			<?php echo CFS()->get( 'front_page_description_content' ); ?>

			<?php echo CFS()->get( 'front_page_volunteer_title' ); ?>
			<?php echo CFS()->get( 'front_page_volunteer_content' ); ?>

			<?php echo CFS()->get( 'front_page_explanation_title' ); ?>
			<?php echo CFS()->get( 'front_page_explanation_content' ); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
