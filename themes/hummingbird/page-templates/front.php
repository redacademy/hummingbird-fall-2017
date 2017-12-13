<?php
/**
 * Template Name: Front Page
 *
 * @package Hummingbird_Theme
 */


get_header(); ?>

	<div id="primary" class="content-area page-front-page">
		<main id="main" class="site-main" role="main">

			<section class="width-full front-page-header">
				<div class="width-content">
					<h1><?php echo CFS()->get( 'front_page_header_title' ); ?></h1>
					<p class="front-page-header-content"><?php echo CFS()->get( 'front_page_header_content' ); ?></p>
					<a href="" class="button-link button-link-solid">Become a Volunteer</a>
					<a href="" class="button-link button-link-hollow">Learn More</a>
				</div>
			</section>

			<section class="width-content flex-horizontal-center">
				<a href="<?php echo esc_url( home_url( 'become-a-volunteer/' ) ); ?>" class="button-link button-link-solid">Become a Volunteer</a>
			</section>

			<section class="width-content flex-horizontal-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logos/svg/hummingbird-network-logo-color.svg">
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_description_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_description_content' ); ?></p>
			</section>

			<section class="width-content ">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/maps-home-page.png">
			</section>

			<section class="width-content flex-horizontal-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/elements/bear.svg">
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_volunteer_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_volunteer_content' ); ?></p>
			</section>

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_explanation_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_explanation_content' ); ?></p>
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

			<section class="width-content">
				<h2><?php echo CFS()->get( 'front_page_impact_title' ); ?></h2>
				<p><?php echo CFS()->get( 'front_page_impact_content' ); ?></p>
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

			<?php $fields = CFS()->get('front_page_volunteer_case' );

			// d($fields);

			if(isset($fields)):

				foreach ( $fields as $field ) : ?>
					<section class="width-content flex-horizontal-center"> <!-- Hi, I'm Paula! -->
						<div
							style="	background-image: url(<?php echo $field['front_page_volunteer_case_photo'] ?>);
											background-size: cover;
											width: 360px;
											min-width: 360px;
											height: 360px;
											margin-right: 4rem;">
						</div>
						<div>
							<h2>Hi! I'm <?php echo $field['front_page_volunteer_case_name']; ?></h2>
							<p><?php echo $field['front_page_volunteer_case_content']; ?></p>
							<p>You can join <?php echo $field['front_page_volunteer_case_name']; ?> and 5000 other digital volunteers to prevent wildfires.</p>
						</div>
					</section>
				<?php 
				endforeach;
			endif;
			?>

			<section class="width-content flex-horizontal-center">
				<a href="<?php echo esc_url( home_url( 'take-action/' ) ); ?>" class="button-link button-link-hollow">Find Out More</a>
			</section>

			<section class="width-content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
