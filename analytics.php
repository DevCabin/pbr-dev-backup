<?php
/**
 * Template Name: Analytics
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */

get_header(); ?>

			<div class="banner analytics" style="background:url(<?php the_field( 'banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px; justify-content: flex-start;">

				<div class="banner-text">
					<?php the_field( 'banner_area_text' ); ?>
				</div>


			</div>


				<div class="green left">
					<h3 class="line"><?php the_field( 'top_left_heading_(copy)' ); ?></h3>
					<?php the_field( 'top_left_content_(copy)' ); ?>

				</div>

				<div class="image-div first-image" style="background:url(<?php the_field( 'top_right_image' ); ?>) top center no-repeat;">

				</div>


				<div class="image-div second-image" style="background:url(<?php the_field( 'row_2_left_image_(copy)' ); ?>) center center no-repeat;">

				</div>
				<div class="blue right">


					<h3 class="line"><?php the_field( 'row_2_right_heading' ); ?></h3>
					<?php the_field( 'row_2_right_text' ); ?>

				</div>



							<div class="row callout gray">
								<?php the_field( 'callout_area_text_(copy)' ); ?>
								<!--
								<div class="left-text">

									<h4>Learn more about our cost</h4>

								</div>

								<div class="cta-right">
									<a class="button ">Learn More</a>
								</div>
							-->

							</div><!-- callout -->




							<div class="red-reverse left ">

								<h3 class="line"><?php the_field( 'row_3_left_heading' ); ?></h3>

								<?php the_field( 'row_3_left_text_(copy)' ); ?>

							</div>

							<div class="image-div third-image " style="background:url(<?php the_field( 'row_3_right_image' ); ?>) top center no-repeat;">

							</div>


							<div class="image-div sixth-image" style="background:url(<?php the_field( 'bottom_left_image_final' ); ?>) top center no-repeat;">

							</div>

							<div class="green-reverse right">

								<h3 class="line"><?php the_field( 'bottom_right_heading_final' ); ?>!</h3>
								<?php the_field( 'bottom_right_content_final' ); ?>

							</div>




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
