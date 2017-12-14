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

			<section class="width-content impact-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/wolf.svg">
				<h1><?php echo CFS()->get( 'impact_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'impact_header_content' ); ?></p>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'impact_header_case_title' ); ?></h1>
			</section>

			<section class="impact-impact-case"> <!-- The three impact metrics -->
				<?php $fields = CFS()->get( 'impact_impact_case' );

				foreach ( $fields as $field ) : ?>

					<div class="impact-impact-content">
						<div class="flex-horizontal-left">
							<div class="impact-impact-case-icon-container">
								<img src=" <?php echo $field['impact_impact_case_icon'] ?> ">
							</div>
							<div>
								<h3 class="impact-impact-case-number"><?php echo $field['impact_impact_case_number'] ?></h3>
								<h3 class="impact-impact-case-metric"><?php echo $field['impact_impact_case_metric'] ?></h3>
							</div>
						</div>
						<p><?php echo $field['impact_impact_case_content'] ?></p>
					</div>
					<div
						class="width-full impact-impact-case-photo"
						style="background-image: url(<?php echo $field['impact_impact_case_photo'] ?>);">
					</div>

				<?php endforeach; ?>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'impact_where_title' ); ?></h2>
				<p><?php echo CFS()->get( 'impact_where_content' ); ?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/maps-home-page.png">
			</section>

			<section class="width-content">
				<?php
					$fields = CFS()->get( 'impact_call_case' );
					foreach ( $fields as $field ) {
						echo '<h2>';
						echo $field['impact_call_case_title'];
						echo '</h2>';
					}
				?>
			</section>

			<section class="width-content flex-horizontal-center get-involved">
				<div><a href="<?php echo esc_url( home_url( 'take-action/' ) ); ?>" class="contact-button button-link button-link-solid">Get Involved</a></div>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
