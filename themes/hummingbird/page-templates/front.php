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
					$fields = CFS()->get( 'front_page_explanation_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
						echo $field['front_page_explanation_case_number'];
						echo $field['front_page_explanation_case_title'];
						echo $field['front_page_explanation_case_abstract'];
						echo '</div>';
					}
				?>
			</section>

			<section>
				<h2><?php echo CFS()->get( 'front_page_impact_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_impact_content' ); ?></p>
			</section>

			<section>
				<?php
					$fields = CFS()->get( 'front_page_impact_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
						echo $field['front_page_impact_case_number'];
						echo $field['front_page_impact_case_metric'];
						echo $field['front_page_impact_case_content'];
						echo '</div>';
					}
				?>
			</section>

			<section>
				<h2><?php echo CFS()->get( 'front_page_volunteer_title' ); ?></h2>
			</section>

			<section>
				<?php
					$fields = CFS()->get( 'front_page_volunteer_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
						echo $field['front_page_volunteer_case_name'];
						echo $field['front_page_volunteer_case_content'];
						echo '</div>';
					}
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
