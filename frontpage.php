<?php
/**
 * Template Name: Front Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */

get_header(); ?>

			<div class="banner" style="background:url(<?php the_field( 'home_banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;">

				<div class="banner-text">
        <?php the_field( 'home_banner_text' ); ?>
					<a href="<?php the_field( 'home_banner_button_link' ); ?>" class="button button-solid red"><?php the_field( 'home_banner_button_text' ); ?></a>
				</div>
				<div class="banner-group">
					<a href="<?php the_field( 'home_banner_super_link' ); ?>">
						<img src="<?php the_field( 'home_banner_super_image' ); ?>" alt="">
					</a>
				</div>
			</div>


				<div class="green left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-check.png" alt="">
					<h3 class="line"><?php the_field( 'home_top_left_heading' ); ?></h3>
					<?php the_field( 'home_top_left_content' ); ?>
						<a href="<?php the_field( 'home_top_left_link' ); ?>" class="button"><?php the_field( 'home_top_left_link_text' ); ?></a>
				</div>

				<div class="image-div first-image" style="background:url(<?php the_field( 'top_right_image_n' ); ?>) top center no-repeat;">

				</div>


				<div class="image-div second-image" style="background:url(<?php the_field( 'home_row_two_left_image' ); ?>) center center no-repeat;">

				</div>
				<div class="blue right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lightbulb.png" alt="">

					<h3 class="line"><?php the_field( 'second_row_heading' ); ?></h3>
					<?php the_field( 'second_row_content' ); ?>

				</div>

			<div class="row callout nomap" style="min-height:300px;background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/pattern@2x.png) center center no-repeat;background-size: cover;">
				<div class="left-text">

					<?php the_field( 'home_callout_area_text' ); ?>

				</div>

				<div class="circle-chart">
					<img src="<?php the_field( 'home_callout_area_image' ); ?>" alt="number saved image">
				</div>

			</div><!-- callout -->

				<div class="red left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/matrix-white.png" alt="">
					<h3 class="line"><?php the_field( 'home_bottom_left_heading' ); ?></h3>

						<?php the_field( 'home_bottom_left_content' ); ?>
				</div>
				<div class="image-div third-image" style="background:url(<?php the_field( 'home_bottom_right_image' ); ?>) center center no-repeat;">

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
