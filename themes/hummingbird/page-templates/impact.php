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

			<section class="width-content">
				<h1><?php echo CFS()->get( 'impact_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'impact_header_content' ); ?></p>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'impact_header_case_title' ); ?></h1>
			</section>

			<section class="width-content">
				<?php
					$fields = CFS()->get( 'impact_header_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
							echo '<h3>';
								echo $field['impact_header_case_title'];
							echo '</h3>';
							echo '<p>';
								echo $field['impact_header_case_content'];
							echo '<p>';
						echo '</div>';
					}
				?>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'impact_where_title' ); ?></h1>
				<p><?php echo CFS()->get( 'impact_where_content' ); ?></p>
			</section>

			<section class="width-content">
				<?php
					$fields = CFS()->get( 'impact_call_case' );
					foreach ( $fields as $field ) {
						echo '<h1>';
						echo $field['impact_call_case_title'];
						echo '</h1>';
					}
				?>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
