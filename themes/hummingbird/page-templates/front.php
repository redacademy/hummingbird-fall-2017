<?php
/**
 * Template Name: Front Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-front-page">
		<main id="main" class="site-main" role="main">

			<div class="wild-fire-count"> <!-- Wild fire count -->
				<h3>Wild Fire Count</h3>
			  <div class="wild-fire-count-maps">
				<img class="symbol-color" src="<?php echo get_template_directory_uri(); ?>/assets/elements/bc-mini-map.png">
				<img class="symbol-color" src="<?php echo get_template_directory_uri(); ?>/assets/elements/alberta-mini-map.png">
				<img class="symbol-color" src="<?php echo get_template_directory_uri(); ?>/assets/elements/yukon-mini-map.png">
			  </div>
			  <div class="count">
			    <h2>29</h2><h2>17</h2><h2>7</h2>
			  </div>
			</div>

			<section class="width-full front-page-header">
				<div class="width-content-left we-detect-fires">
					<h1><?php echo CFS()->get( 'front_page_header_title' ); ?></h1>
					<p class="front-page-header-content"><?php echo CFS()->get( 'front_page_header_content' ); ?></p>
					<a href="<?php echo esc_url( home_url( 'become-a-volunteer/' ) ); ?>" class="button-link button-link-solid">Become a Volunteer</a>
					<a href="<?php echo esc_url( home_url( 'who-we-are/' ) ); ?>" class="button-link button-link-hollow">Learn More</a>
				</div>
			</section>

			<section class="volunteer-button-container width-content flex-horizontal-center">
				<a href="<?php echo esc_url( home_url( 'become-a-volunteer/' ) ); ?>" class="button-link button-link-solid">Become a Volunteer</a>
			</section>

			<section class="width-content flex-horizontal-center"> <!-- Orange logo without text -->
				<img class="symbol-color" src="<?php echo get_template_directory_uri(); ?>/assets/logos/medium/hummingbird-network-symbol-color.png">
			</section>

			<section class="width-column"> <!-- Hummingbird Network -->
				<h1 class="text-center"><?php echo CFS()->get( 'front_page_description_title' ); ?></h1>
				<p class="text-center"><?php echo CFS()->get( 'front_page_description_content' ); ?></p>
			</section>

			<section class="width-column"> <!-- Maps -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/maps-home-page.png">
			</section>

			<section class="width-content front-page-volunteer"> <!-- What is Digital Volunteering? -->
				<div>
					<h2><?php echo CFS()->get( 'front_page_volunteer_title' ); ?></h2>
					<p class="text-center"><?php echo CFS()->get( 'front_page_volunteer_content' ); ?></p>
				</div>
			</section>

			<section class="width-content flex-horizontal-center"> <!-- Bear -->
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/bear.svg">
			</section>

			<section class="width-column"> <!-- Here's how it works -->
				<h2><?php echo CFS()->get( 'front_page_explanation_title' ); ?></h2>
				<p class="text-center"><?php echo CFS()->get( 'front_page_explanation_content' ); ?></p>
			</section>

			<section class="width-content front-page-explanation-case">
				<?php
					$fields = CFS()->get( 'front_page_explanation_case' );
					foreach ( $fields as $field ) {
						echo '<div>';
							echo '<p class="bignumber">'.$field['front_page_explanation_case_number'].'</p>';
							echo '<h3>'.$field['front_page_explanation_case_title'].'</h3>';
							echo '<p>'.$field['front_page_explanation_case_abstract'].'</p>';
							echo '<img  class="front-page-explanation-case-icon" src="'.$field['front_page_explanation_case_icon'].'">';
						echo '</div>';
					}
				?>
			</section>

			<section class="width-content flex-horizontal-center">
				<a href="<?php echo esc_url( home_url( 'who-we-are/' ) ); ?>" class="button-link button-link-solid">Read Our Story</a>
			</section>

			<section class="width-content flex-horizontal-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/wolf.svg">
			</section>

			<section class="width-column"> <!-- Out Impact -->
				<h2><?php echo CFS()->get( 'front_page_impact_title' ); ?></h2>
				<p class="text-center"><?php echo CFS()->get( 'front_page_impact_content' ); ?></p>
			</section>

			<section class="front-page-impact-case"> <!-- The three impact metrics -->
				<?php $fields = CFS()->get( 'front_page_impact_case' );

				// d($fields);
				
				foreach ( $fields as $field ) : ?>

					<div class="front-page-impact-content">
						<div class="flex-horizontal-left">
							<div class="front-page-impact-case-icon-container">
								<img src=" <?php echo $field['front_page_impact_case_icon'] ?> ">
							</div>
							<div>
								<h3 class="front-page-impact-case-number"><?php echo $field['front_page_impact_case_number'] ?></h3>
								<h3 class="front-page-impact-case-metric"><?php echo $field['front_page_impact_case_metric'] ?></h3>
							</div>
						</div>
						<p><?php echo $field['front_page_impact_case_content'] ?></p>
					</div>
					<div
						class="width-full front-page-impact-case-photo"
						style="background-image: url(<?php echo $field['front_page_impact_case_photo'] ?>);">
					</div>

				<?php endforeach; ?>
			</section>

			<section class="width-content-left volunteer">								<!-- Hi, I'm Paula! -->
				<?php $fields = CFS()->get('front_page_volunteer_case' ); 
					// d($fields);
					if(isset($fields)):
						foreach ( $fields as $field ) : ?>
							<div class="volunteer-img"
								style="background-image: url(<?php echo $field['front_page_volunteer_case_photo'] ?>);"> 				
							</div>
							<div class="volunteer-text">
								<h2 class="text-left">Hi! I'm <?php echo $field['front_page_volunteer_case_name']; ?></h2>
								<p><?php echo $field['front_page_volunteer_case_content']; ?></p>
							</div>
							<div class="you-can-join-text">
								<p>You can join <?php echo $field['front_page_volunteer_case_name']; ?> and 5000 other digital volunteers to prevent wildfires.</p>
							</div>
							<div class="find-out-button">
								<a href="<?php echo esc_url( home_url( 'take-action/' ) ); ?>" class="button-link button-link-hollow-orange">Find Out More</a>
							</div>
						<?php 
						endforeach;
					endif;
				?>
			</section>

			<section class="volunteer-form width-content-left"> <!-- "I want to be part of the community!" form -->
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>

			<section class="volunteer-button-container width-content flex-horizontal-center"> <!-- "Become a Volunteer" button for when the form is hidden on mobile -->
				<a href="<?php echo esc_url( home_url( 'become-a-volunteer/' ) ); ?>" class="button-link button-link-solid">Become a Volunteer</a>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
