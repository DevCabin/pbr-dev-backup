<?php
/**
 * Template Name: PBR Careers
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */


get_header(); ?>
<?php while ( have_posts() ) : the_post();?>
	<div class="grid-four">
		<div class="banner sub-banner" style="background:url(<?php the_field( 'banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;background-size: cover;">
			<div class="banner-text">
				<?php the_field( 'banner_text' ); ?>
			</div>
		</div>

			<div class="blue-reverse left">


						<?php the_content();?>



			</div>

			<div class="image-div first-image " style="background:url(<?php the_field('image_on_the_right');?>) top center no-repeat;">

			</div>



		</div>





<?php endwhile; // End of the loop. ?>
<?php
// get_sidebar();
get_footer();
