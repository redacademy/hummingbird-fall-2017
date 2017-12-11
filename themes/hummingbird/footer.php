<?php
/**
  * Template Name: Footer page
 *
 * @package Hummingbird_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer page-footer" role="contentinfo">

        <div class="footer-form">
					<div class="width-content">
					<?php get_sidebar(); ?>
					</div>
				</div>


				<div class="site-info">

					<div class="logo-white">
						<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/logos/large/symbol-white-large.png" alt="The Hummingbird Network logo">
					</div>
				
					<div class="contact-details-container width-content">

						<h2>Contact Details</h2>

						<img class="logo-large" src="<?php echo get_template_directory_uri(); ?>/assets/logos/large/symbol-color-large.png" alt="The Hummingbird Network logo">

						<ul class="contact-details-one">
							<li>
								<span class="icon-spacer"><img src="<?php echo get_template_directory_uri(); ?>/assets/elements/location-marker.svg" alt="Location"></span>348 Tranquille Road
							</li>
							<li><span class="icon-spacer"></span>Kamloops BC</li>
							<li><span class="icon-spacer"></span>V2B 3G6</li>
							<li><span class="icon-spacer"></span>Canada</li>
						</ul><!-- contact-details-one -->

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

							<div class="contact-button">
								<button class="contact-us button-link-solid">Contact Us</button>
							</div>

						</ul><!-- contact-details-two -->

					</div><!-- contact-details -->
				
				</div><!-- .site-info -->

				<div class="copyrights-container">

					<div class="copyrights-one width-content">
						<span>Blog</span>
						<span>FAQ</span>
						<span>Site Map</span>
						<span>Privacy Policy</span>
						<span>c 2017 Hummingbird Network</span>
					</div>

					<div class="copyrights-two width-content">
						<div>Designed by Dream Team</div>
						<div>Powered by Coffee</div>
					</div>

				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->
		
		<?php wp_footer(); ?><!-- Wordpress toolbar -->

	</body>
</html>
