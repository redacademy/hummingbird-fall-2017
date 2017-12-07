<?php
/**
 * Template Name: Front Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-front-page">
		<main id="main" class="site-main" role="main">

			<section class="width-full">
				<div class="width-content">
					<h1><?php echo CFS()->get( 'front_page_header_title' ); ?></h1>
					<p><?php echo CFS()->get( 'front_page_header_content' ); ?></p>
				</div>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_description_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_description_content' ); ?></p>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_volunteer_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_volunteer_content' ); ?></p>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_explanation_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_explanation_content' ); ?></p>
			</section>

			<section class="width-content front-page-explanation-case">
				<?php
					$fields = CFS()->get( 'front_page_explanation_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
							echo '<p class="bignumber">';
								echo $field['front_page_explanation_case_number'];
							echo '</p>';
							echo '<h3>';
								echo $field['front_page_explanation_case_title'];
							echo '</h3>';
							echo '<p>';
								echo $field['front_page_explanation_case_abstract'];
							echo '</p>';
						echo '</div>';
					}
				?>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_impact_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_impact_content' ); ?></p>
			</section>

			<section class="width-content">
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

			<section class="width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
