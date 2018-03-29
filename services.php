<?php
/**
 * Template Name: Services
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */

get_header(); ?>

	<div class="banner services" style="background:url(<?php the_field( 'banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;">

		<div class="banner-text">

			<?php the_field( 'banner_text' ); ?>

		</div>
		<div class="banner-group">
			<a href="<?php the_field( 'banner_overlay_image_link' ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group307.png" alt="">
			</a>
		</div>
	</div>


				<div class="green left">

					<h3 class="line"><?php the_field( 'home_top_left_heading' ); ?></h3>
					<?php the_field( 'home_top_left_content' ); ?>
				</div>

				<div class="image-div first-image" style="background:url(<?php the_field( 'top_right_image_(copy)' ); ?>) top center no-repeat;">

				</div>


				<div class="image-div second-image" style="background:url(<?php the_field( 'home_row_two_left_image' ); ?>) center center no-repeat;">

				</div>
				<div class="blue right">

					<div class="blue-cont">
						<h3 class="line"><?php the_field( 'second_row_title' ); ?></h3>
						<?php the_field( 'second_row_content' ); ?>
					</div>


				</div>



							<div class="row callout gray">
								<?php the_field( 'home_callout_area_text' ); ?>
								<!--
								<div class="left-text">

									<h4>Learn more about our features</h4>

								</div>

								<div class="cta-right">
									<a class="button ">Learn More</a>
								</div>
							-->

							</div><!-- callout -->




							<div class="red-reverse left ">

								<h3 class="line"><?php the_field( 'home_bottom_left_heading' ); ?></h3>
									<?php the_field( 'home_bottom_left_content' ); ?>

							</div>

							<div class="image-div third-image " style="background:url(<?php the_field( 'bottom_right_image_(copy)' ); ?>) top center no-repeat;">

							</div>



							<div class="row callout nomap" style="min-height:300px;background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/pattern@2x.png) center center no-repeat;background-size: cover;">
								<div class="left-text">
									<?php the_field( 'bottom_callout_area_text' ); ?>
								</div>

								<div class="circle-chart">
									<img src="<?php the_field( 'bottom_callout_area_image' ); ?>" alt="">
								</div>

							</div><!-- callout -->


			<?php
			/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			*/
			?>




<?php
// get_sidebar();
get_footer();
