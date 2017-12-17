<?php
/**
  * Template Name: Footer page
 *
 * @package Hummingbird_Theme
 */

?>

			</div><!-- #content -->

			<div class="footer-wrapper">
				<footer id="colophon" class="site-footer page-footer width-content" role="contentinfo">

					<div class="footer-form">
						<div class="width-content">
						<?php get_sidebar(); ?>
						</div>
					</div>

					<div class="footer-logo-large">
					</div>

					<div class="site-info">

						<div class="logo-white">
							<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/logos/large/symbol-white-large.png" alt="The Hummingbird Network logo">
						</div>
					
						<div class="contact-details-container width-content">

							<div> <!-- container div for flexbox purposes -->
								<h2>Contact Details</h2>
								<ul class="contact-details-one">
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/location-marker.svg" alt="Location"></span><?php echo CFS()->get( 'front_page_address_1', 2 ); ?>
									</li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_2', 2 ); ?></li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_3', 2 ); ?></li>
									<li><span class="icon-spacer"></span><?php echo CFS()->get( 'front_page_address_4', 2 ); ?></li>
								</ul><!-- contact-details-one -->
							</div>

							<div> <!-- container div for flexbox purposes -->
								<ul class="contact-details-two">
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/email-icon.svg" alt="email icon"></span><?php echo CFS()->get( 'front_page_email_address', 2 ); ?>
									</li>
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/phone-icon.svg" alt="phone icon"></span><?php echo CFS()->get( 'front_page_phone_number', 2 ); ?>
									</li>
									<li>
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon.svg" alt="facebook icon"></span>
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon.svg" alt="instagram icon"></span>
										<span class="icon-spacer social-media-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon.svg" alt="twitter icon"></span>
									</li>
								</ul><!-- contact-details-two -->
								<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="contact-button button-link button-link-solid">Contact Us</a>
							</div>

						</div><!-- contact-details -->
					
					</div><!-- .site-info -->

					<div class="copyrights copyrights-one">
              <?php wp_nav_menu( array( 'theme_location' => 'Footer Menu' ) ); ?>  
    			</div>


					<div class="copyrights copyrights-two">
						<div>Designed by<br>Dream Team</div>
						<div>Powered by<br>Coffee</div>
					</div>

				</footer><!-- #colophon -->
			</div>
		</div><!-- #page -->
		
		<?php wp_footer(); ?><!-- Wordpress toolbar -->

	</body>
</html>