<?php
/**
 * Template Name: Customer Care
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */

get_header(); ?>

			<div class="banner analytics" style="background:url(<?php the_field( 'banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px; justify-content: flex-start;">

				<div class="banner-text">
					<?php the_field( 'banner_text' ); ?>
				</div>


			</div>


				<div class="green-reverse left">
					<!--img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-check.png" alt=""-->
					<h3 class="line"><?php the_field( 'top_left_title' ); ?></h3>
					<?php the_field( 'top_left_content_(copy)' ); ?>
				</div>

				<div class="image-div first-image" style="background:url(<?php the_field( 'top_right_image' ); ?>) top center no-repeat;">

				</div>


				<div class="image-div second-image" style="background:url(<?php the_field( 'second_row_left_image_(copy)' ); ?>) center center no-repeat;">

				</div>
				<div class="blue right">
					<!--img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lightbulb.png" alt=""-->

					<h3 class="line"><?php the_field( 'second_row_heading_(copy)' ); ?></h3>
					<?php the_field( 'second_row_content' ); ?>
						<!--a class="button">Learn More</a-->

				</div>



							<div class="row callout gray">
								<?php the_field( 'callout_area_text_(copy)' ); ?>

							</div><!-- callout -->




							<div class="red left ">

								<h3 class="line"><?php the_field( 'bottom_top_left_heading_(copy)' ); ?></h3>
									<?php the_field( 'bottom_top_left_content_(copy)' ); ?>

							</div>

							<div class="image-div third-image " style="background:url(<?php the_field( 'bottom_top_right_image' ); ?>) top center no-repeat;">

							</div>


							<div class="image-div sixth-image" style="background:url(<?php the_field( 'bottom_left_image_(copy)' ); ?>) top center no-repeat;">

							</div>

							<div class="green right">

								<h3 class="line"><?php the_field( 'bottom_right_heading_(copy)' ); ?></h3>
								<?php the_field( 'bottom_right_text_(copy)' ); ?>

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
