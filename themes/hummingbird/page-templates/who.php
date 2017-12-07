<?php
/**
 * Template Name: Who Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-who">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'who_header_title' ); ?></h1>
			</section>

			<section class="width-content">
				<?php
					$fields = CFS()->get( 'who_header_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
						echo $field['who_header_case_title'];
						echo $field['who_header_case_content'];
						echo '</div>';
					}
				?>
			</section>

			<section class="width-content">
				<h1><?php echo CFS()->get( 'who_team_title' ); ?></h1>
			</section>

			<section class="width-content">
				<?php
					$fields = CFS()->get( 'who_team_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
						echo $field['who_team_case_name'];
						echo $field['who_team_case_content'];
						echo '</div>';
					}
				?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
