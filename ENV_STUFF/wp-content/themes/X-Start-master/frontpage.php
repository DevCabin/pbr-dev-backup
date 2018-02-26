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

			<div class="banner" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/page_banner_4.png) top center no-repeat; height: 407px; margin-bottom: 6px;">

				<div class="banner-text">
					<h2>Medical Bill Review<br>
					For Workers Comp</h2>
					<p>We offer uniquely personal service
					helping employers contain costs on their
					workers' compensation claims through
				  medical bill review and negotiation</p>
					<a href="#" class="button button-solid red">LEARN MORE</a>
				</div>
				<div class="banner-group">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group307.png" alt="">
				</div>
			</div>


				<div class="green left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-check.png" alt="">
					<h3 class="line">We've Got you Covered!</h3>
					<p>Lorem ipsum doler sit amet ipsum doler sit
						Lorem ipsum doler sit amet</p>
						<a class="button">Learn More</a>
				</div>

				<div class="image-div first-image" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/home-right.png) top center no-repeat;">

				</div>


				<div class="image-div second-image" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/home-left.png) center center no-repeat;">

				</div>
				<div class="blue right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lightbulb.png" alt="">

					<h3 class="line">The Proactive Approach</h3>
					<p>Lorem ipsum doler sit amet doler sit sit amet doler sit
						Lorem ipsum doler sit amet</p>
						<a class="button">Learn More</a>

				</div>

			<div class="row callout" style="min-height:400px;background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/pattern@2x.png) center center no-repeat;background-size: cover;">
				<div class="left-text">
					<h3>We Save You</h3>
					<h4>Precision Bill Review saved<br>
					our clients 47.38%</h4>
					<a class="button button-solid green">Learn More</a>
				</div>

				<div class="circle-chart">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/circle-graphic.png" alt="fourty seven percent">
				</div>

			</div><!-- callout -->

				<div class="red left">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/matrix-white.png" alt="">
					<h3 class="line">Web Enhanced Tech</h3>
					<p>Lorem ipsum doler sit amet ipsum doler sit
						Lorem ipsum doler sit amet</p>
						<a class="button">Learn More</a>
				</div>
				<div class="image-div third-image" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/home-bottom.png) center center no-repeat;">

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
