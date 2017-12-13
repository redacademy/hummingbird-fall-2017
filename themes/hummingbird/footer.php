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
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/location-marker.svg" alt="Location"></span>348 Tranquille Road
									</li>
									<li><span class="icon-spacer"></span>Kamloops BC</li>
									<li><span class="icon-spacer"></span>V2B 3G6</li>
									<li><span class="icon-spacer"></span>Canada</li>
								</ul><!-- contact-details-one -->
							</div>

							<div> <!-- container div for flexbox purposes -->
								<ul class="contact-details-two">
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/email-icon.svg" alt="email icon"></span>info@hummingbirdnetwork.ca
									</li>
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/phone-icon.svg" alt="phone icon"></span>(250) 877.7082
									</li>
									<li>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon.svg" alt="facebook icon"></span>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon.svg" alt="instagram icon"></span>
										<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon.svg" alt="twitter icon"></span>
									</li>
								</ul><!-- contact-details-two -->
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="contact-button button-link button-link-solid">Contact Us</a>
							</div>

						</div><!-- contact-details -->
					
					</div><!-- .site-info -->

					<div class="copyrights copyrights-one">
						<span>Blog</span>
						<span>FAQ</span>
						<span>Site Map</span>
						<span>Privacy Policy</span>
						<span>c 2017 Hummingbird Network</span>
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
