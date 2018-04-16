<?php
/**
 * Template Name: Contact
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */


get_header(); ?>

			<div class="banner sub-banner" style="background:url(<?php the_field( 'c_banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;background-size: cover;">
				<div class="banner-text">
					<?php the_field( 'banner_text' ); ?>
				</div>
			</div>



			<div class="blue-reverse left contact-left">

				<?php

				while ( have_posts() ) : the_post();
					the_content();
				endwhile; // End of the loop.

				?>
			</div>

			<div class="right-form">

				<?php the_field( 'half_page' ); ?>

			</div>

<br>



			<div class="row callout nomap" style="min-height:400px;background:url(../wp-content/themes/X-Start-master/img/pattern@2x.png) center center no-repeat;background-size: cover;margin-top: -173px;">

					<?php if ( is_active_sidebar( 'wsym-row-left' ) ) { ?>


						<div class="left-text">
							<?php dynamic_sidebar( 'wsym-row-left' ); ?>
						</div>

						<div class="circle-chart">
							<?php dynamic_sidebar( 'wsym-row-right' ); ?>
						</div>


					<?php } else {  ?>


						<div class="left-text">
							<h3><em>We Save You Money!</em></h3>
							<h4>Precision Bill Review saved<br />
							our clients 58.4%</h4>
							<p><a class="button button-solid green" href="../services">Learn More</a></p>
						</div>

						<div class="circle-chart">
							<img src="../wp-content/uploads/2018/04/58Percent-graphic@2x.png" alt="">
						</div>


					<?php } ?>



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
