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

                <p><?php echo CFS()->get( 'footer_address' ); ?></p>
					
                <p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/email-icon.svg" alt="email icon"><span><?php echo CFS()->get( 'footer_email' ); ?></span></p>
                <p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/phone-icon.svg" alt="phone icon"><span><?php echo CFS()->get( 'footer_phone_number' ); ?></span>
				</p>
                <p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/facebook-icon.svg" alt="facebook icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/elements/instagram-icon.svg" alt="instagram icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/twitter-icon.svg" alt="twitter icon">
                </p>

				<a href="<?php echo esc_url( 'https://github.com/redacademy/hummingbird-fall-2017' ); ?>"><?php printf( esc_html( 'Proudly developed by %s' ), 'Nate, Travis, Hamdy' ); ?></a>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
