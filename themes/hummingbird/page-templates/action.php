<?php
/**
 * 
 * Template Name: Action Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-action">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<section class="width-content action-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/deer.svg">
				<h1><?php echo CFS()->get( 'action_header_title' ); ?></h1>
				<p><?php echo CFS()->get( 'action_header_content' ); ?></p>
			</section>

			<section class="width-content action-steps">
				<h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				Set your own schedule</span></h2>
                <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				Work from anywhere</span></h2>
                <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/moose.svg">
				You decide how much you volunteer</span></h2>
			</section>
			  <div class="start">
                <h2>Start making an impact in three simple steps.</h2>
				</div>
			<section class="width-content simple-steps">
			  <div class="call-to-action">
				<h2>Register</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-clipboard.png">
			  </div>
			  <div class="call-to-action">
				<h2>Analyze Photos</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-phone.png">
			  </div>
			  <div class="call-to-action">
				<h2>Save communities</h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/circle-magnify.png">
			  </div>
			</section>
			<div class="meet">
                <h2>Meet our Digital Volunteers.</h2>
			  </div>
			</section>

			<?php $fields = CFS()->get('front_page_volunteer_case', 2 );

			// d($fields);

			if(isset($fields)):

				foreach ( $fields as $field ) : ?>
					<section class="width-content volunteer"> <!-- Hi, I'm Paula! -->
						<div class="volunteer-img"
							 style="background-image: url(<?php echo $field['front_page_volunteer_case_photo'] ?>);">
							 				
						</div>
						<div class="volunteer-text">
							<h2>Hi! I'm <?php echo $field['front_page_volunteer_case_name']; ?></h2>
							<p><?php echo $field['front_page_volunteer_case_content']; ?></p>
							<p>You can join <?php echo $field['front_page_volunteer_case_name']; ?> and 5000 other digital volunteers to prevent wildfires.</p>
						</div>
					</section>
				<?php 
				endforeach;
			endif;
			?>

			

			<section class="width-content call">
				<h2><?php echo CFS()->get( 'action_call' ); ?></h2>
			</section>

			<section class="flex-horizontal-center volunteer-button">
				<a href="<?php echo esc_url( home_url( 'become-a-volunteer/' ) ); ?>" class="button-link button-link-solid">Become a Volunteer</a>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
