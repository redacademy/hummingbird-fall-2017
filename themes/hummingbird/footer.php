<?php
/**
  * Template Name: Footer page
 *
 * @package Hummingbird_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer page-footer" role="contentinfo">
				<div class="site-info">

				<div class="line-one">
				   <span><h3>Contact Details</h3></span><img class="logo-white" src="<?php echo get_template_directory_uri(); ?>/assets/logos/large/symbol-white-large.png" alt="symbol white large">
				</div>

				<div class="address">   
			       <img class="location-marker" src="<?php echo get_template_directory_uri(); ?>/assets/elements/location-marker.svg" alt="location marker">
				  <p>348 Tranquille Road</p>
				  <p>Kamloops BC</p>
				  <p> V2B 3G6</p>
				  <p> Canada</p>
				</div>

				<div class="emailphone">
                  <p class="email">
				    <img class="email-icon" src="<?php echo get_template_directory_uri(); ?>/assets/elements/email-icon.svg" alt="email icon"><span>info@hummingbirdnetwork.ca</span>
				  </p>
                  <p class="phone">
					<img class="phone-icon" src="<?php echo get_template_directory_uri(); ?>/assets/elements/phone-icon.svg" alt="phone icon"><span class="phone-number"> (250) 877.7082</span>
				  </p>
				</div>
                <div class="sm-icons">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon.svg" alt="facebook icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon.svg" alt="instagram icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon.svg" alt="twitter icon">
                </div>
				<div class="black-bottom">

				</div> 

				<a href="<?php echo esc_url( 'https://github.com/redacademy/hummingbird-fall-2017' ); ?>"><?php printf( esc_html( 'Proudly developed by %s' ), 'Nate, Travis, Hamdy' ); ?></a>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
