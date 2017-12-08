<?php
/**
 * Template Name: Front Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-front-page">
		<main id="main" class="site-main" role="main">

			<section class="width-full front-page-header">
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
							echo '<p class="bignumber">'.$field['front_page_explanation_case_number'].'</p>';
							echo '<h3>'.$field['front_page_explanation_case_title'].'</h3>';
							echo '<p>'.$field['front_page_explanation_case_abstract'].'</p>';
							echo '<img src="'.$field['front_page_explanation_case_icon'].'">';
						echo '</div>';
					}
				?>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_impact_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_impact_content' ); ?></p>
			</section>

			<?php $fields = CFS()->get( 'front_page_impact_case' );
			foreach ( $fields as $field ) { ?>

				<section class="width-content">
					<?php echo '<h3>'.$field['front_page_impact_case_number'].'</h3>';
					echo '<h3>'.$field['front_page_impact_case_metric'].'</h3>';
					echo '<p>'.$field['front_page_impact_case_content'].'</p>';
					echo '<img src="'.$field['front_page_impact_case_icon'].'">'; ?>
				</section>
				<section
					class="width-full front-page-impact-case-photo"
					style="background-image: url(<?php echo $field['front_page_impact_case_photo'] ?>);">
				</section>
			<?php } ?>
			

			<section class="width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
