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

			<section>
				<h1><?php echo CFS()->get( 'front_page_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'front_page_header_content' ); ?></p>
			</section>

			<section>
				<h2><?php echo CFS()->get( 'front_page_description_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_description_content' ); ?></p>
			</section>

			<section>
				<h2><?php echo CFS()->get( 'front_page_volunteer_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_volunteer_content' ); ?></p>
			</section>

			<section>
				<h2><?php echo CFS()->get( 'front_page_explanation_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_explanation_content' ); ?></p>
			</section>

			<section>
				<?php
					$loop = CFS()->get( 'front_page_explanation_content_case' );
					foreach ( $loop as $row ) {
							echo $row['step_number'];
							echo $row['title'];
					}
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
