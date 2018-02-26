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

<div class="banner services" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/page_banner_4.png) top center no-repeat; height: 407px; margin-bottom: 6px;">

	<div class="banner-text">
		<h2>Services</h2>
		<p>We offer uniquely personal service
		helping employers contain costs on their
		workers' compensation claims through
		medical bill review and negotiation</p>

	</div>
	<div class="banner-group">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Group307.png" alt="">
	</div>
</div>


				<div class="green left">

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


					<h3 class="line">The Proactive Approach</h3>
					<p>Lorem ipsum doler sit amet doler sit sit amet doler sit
						Lorem ipsum doler sit amet</p>
						<a class="button">Learn More</a>

				</div>



							<div class="row callout gray">
								<div class="left-text">

									<h4>Learn more about our features</h4>

								</div>

								<div class="cta-right">
									<a class="button ">Learn More</a>
								</div>

							</div><!-- callout -->




							<div class="red-reverse left ">

								<h3 class="line">Hospital Bill Review</h3>
									<p>It’s inevitable. At some point, nearly every company
									faces workplace iniuries and must address complicated
									workers’ compensation issues. Often the sheer volume of
									mandatory paperwork, reports, and billing statements
									can make it difficult to monitor medical and
									rehabilitation costs in an efficient manner. We will ensure
									that you pay only what you owe on your workers’
									compensation claims.</p>

							</div>

							<div class="image-div third-image " style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/red-1-r.png) top center no-repeat;">

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
