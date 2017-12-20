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

			<section class="width-content"> <!-- Moose -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				<h1><?php echo CFS()->get( 'who_header_title' ); ?></h1>
			</section>

			<section class="who-content-wrapper"> <!-- Who We Are -->
				<?php $fields = CFS()->get( 'who_header_case' );
					foreach ( $fields as $field ) { ?>

					<div class="who-title-content">
						<div class="who-title-case box-shadow">
							<h2 class="who_header_case_title"><?php echo $field['who_header_case_title'] ?></h2>	
							<p><?php echo $field['who_header_case_content'] ?></p>
						</div>
					</div>
			
					<div
						<?php if(isset($field['who_header_case_photo'])): ?>
									class="who_header_case-photo"
									style="background-image: url(<?php echo wp_get_attachment_image_src($field['who_header_case_photo'], 'medium_large')[0] ?>);">
						<?php endif; ?>
					</div>
				
				<?php } ?>
			</section>

			<section class="width-content front-page-explanation"> <!-- Bear -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/bear.svg">
				<h1><?php echo CFS()->get( 'front_page_explanation_title', 2 ); ?></h1>
				<p><?php echo CFS()->get( 'front_page_explanation_content', 2 ); ?></p>
			</section>

			<section class="width-content front-page-explanation-case"> <!-- Here's How It Works -->
				<?php
					$fields = CFS()->get( 'front_page_explanation_case', 2 );

					if(isset($fields)):	
						foreach ( $fields as $field ) { ?>
							<div class="explanation-case box-shadow">

								<p class="bignumber"><?php echo $field['front_page_explanation_case_number'] ?>
									<span class="front-page-explanation-case-icon icon-one"
										style="background-image: url( <?php echo wp_get_attachment_image_src($field['front_page_explanation_case_icon'], 'thumbnail')[0] ?>);">
									</span>
								</p>

								<h2><?php echo $field['front_page_explanation_case_title'] ?></h2>
								<p class="green-text"><?php echo $field['front_page_explanation_case_abstract'] ?></p>
								<p><?php echo $field['front_page_explanation_case_content'] ?></p>

								<div class="front-page-explanation-case-icon icon-two"
									style="background-image: url( <?php echo wp_get_attachment_image_src($field['front_page_explanation_case_icon'], 'thumbnail')[0] ?>);">
								</div>

							</div>
					<?php }
				endif; ?>
			</section>

			<section class="width-content">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/fox.svg">
				<h1><?php echo CFS()->get( 'who_team_title' ); ?></h1>
			</section>

			<section class="width-content team-case">
				<?php
					$fields = CFS()->get( 'who_team_case' );
					foreach ( $fields as $field ) { ?>
					<div class="single-team-member">
						<div
							class="who_team_case-photo"
							style="background-image: url(<?php echo wp_get_attachment_image_src($field['who_team_case_photo'], 'medium')[0] ?>);">
						</div>

						<?php
						echo '<h3>';
						echo $field['who_team_case_name'];
						echo '</h3>';
						echo '<h4>';
						echo $field['who_team_case_title'];
						echo '</h4>'; ?>

						<span>
							<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon-black.svg" alt="facebook icon"></span>
							<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon-black.svg" alt="instagram icon"></span>
							<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon-black.svg" alt="twitter icon"></span>
						</span>
						
						<?php	
						echo '<p>';
						echo $field['who_team_case_content'];
						echo '</p>';
						?>
					</div>						
						<?php } ?>
			</section>

			<section class="width-content who-impact-statement">
					<h2><?php echo CFS()->get( 'who_impact_statement' ); ?></h2>
			</section>

			<section class="width-content our-impact-link">
				<span><?php echo CFS()->get( 'our_impact_link' ); ?></span>
				<div><a href="<?php echo esc_url( home_url( 'our-impact/' ) ); ?>" class="contact-button button-link button-link-solid">See Our Impact</a></div>
			</section>	 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
