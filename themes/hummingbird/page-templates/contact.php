<?php
/**
 * Template Name: Contact Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-contact">
		<main id="main" class="site-main" role="main">


			<section class="contact-form width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
