<?php
/**
 * The template for displaying the footer.
 *
 * @package Hummingbird_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer page-footer" role="contentinfo">
				<div class="site-info">

                <p>
				<img src="/Assets/Elements/email icon.svg" alt="email icon"><span>info@hummingbirdnetwork.ca</span></p>
                <p>
					<img src="/Assets/Elements/phone icon.svg" alt="phone icon"><span>(250) 877.7082</span>
				</p>
                <p>
					<img src="/Assets/Elements/facebook icon.svg" alt="facebook icon">
                    <img src="/Assets/Elements/instagram icon.svg" alt="instagram icon">
					<img src="/Assets/Elements/twitter icon.svg" alt="twitter icon">
                </p>


				<a href="<?php echo esc_url( 'https://github.com/redacademy/hummingbird-fall-2017' ); ?>"><?php printf( esc_html( 'Proudly developed by %s' ), 'Nate, Travis, Hamdy' ); ?></a>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
