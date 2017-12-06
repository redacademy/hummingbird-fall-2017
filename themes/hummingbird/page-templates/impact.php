<?php
/**
 * Template Name: Impact Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-impact">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<section>
				<h1><?php echo CFS()->get( 'impact_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'impact_header_content' ); ?></p>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
