<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hummingbird_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area page-404">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<section class="width-content">
				      <img src="<?php echo get_template_directory_uri(); ?>/assets/elements/wolf.svg">
					  <h1 class="page-title"><?php echo esc_html( 'Oops! We can’t seem to find the page you’re looking for.' ); ?></h1>
					</section>
				</header><!-- .page-header -->

                <section class="width-content flex-horizontal-center back-button">
				  <a href="<?php echo esc_url( home_url() ); ?>" class="button-link button-link-solid">Back to the home page</a>
			    </section>
			
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
