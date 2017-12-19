<?php
/**
 * Template Name: Contact Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-contact">
		<main id="main" class="site-main" role="main">

			<section class="width-content contact-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/deer.svg">
				<h1>Contact Us</h1>
			</section>

						<div class="contact-details-container width-content">
								<h2>Contact Details</h2>
							<div class="contact-details-wrapper"> <!-- container div for flexbox purposes -->
								
								<ul class="contact-details-one">
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/location-marker-black.svg" alt="Location"></span><?php echo CFS()->get( 'front_page_address_1', 2 ); ?>
									</li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_2', 2 ); ?></li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_3', 2 ); ?></li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_4', 2 ); ?></li>
								</ul><!-- contact-details-one -->
							</div>

							<div class="contact-details-wrapper-two"> <!-- container div for flexbox purposes -->
								<ul class="contact-details-two">
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/email-icon-black.svg" alt="email icon"></span><?php echo CFS()->get( 'front_page_email_address', 2 ); ?>
									</li>
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/phone-icon-black.svg" alt="phone icon"></span><?php echo CFS()->get( 'front_page_phone_number', 2 ); ?>
									</li>
								</ul><!-- contact-details-two -->
							</div>

							<div class="contact-details-three">
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon-orange.svg" alt="facebook icon"></span>
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon-orange.svg" alt="instagram icon"></span>
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon-orange.svg" alt="twitter icon"></span>
							</div><!-- contact-details-three -->

						</div><!-- contact-details -->

			<section class="contact-form width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
