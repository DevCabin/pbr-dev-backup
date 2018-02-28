<?php
/**
 * Template Name: About
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */


get_header(); ?>

			<div class="banner sub-banner grid-order-one" style="background:url(<?php the_field( 'banner_image' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;">

				<div class="banner-text">
					<?php the_field( 'banner_area_text' ); ?>

				</div>

			</div>


			<div class="green-reverse left">

				<h3 class="line"><?php the_field( 'top_left_heading' ); ?></h3>

				<?php the_field( 'top_left_content' ); ?>

			</div>


				<div class="image-div first-image " style="background:url(<?php the_field( 'top_right_image' ); ?>) top center no-repeat;">

				</div>


				<div class="image-div second-image " style="background:url(<?php the_field( 'row_two_left_image' ); ?>) center center no-repeat;">

				</div>
			<div class="blue right">

					<h3 class="line left-text"><?php the_field( 'row_two_right_heading' ); ?></h3>

						<p class="left-text">
								<?php the_field( 'row_two_right_text' ); ?>
						</p>

			</div>


			<div class="red-reverse left ">

				<h3 class="line"><?php the_field( 'row_3_left_heading' ); ?></h3>

					<?php the_field( 'row_3_left_text' ); ?>

			</div>

			<div class="image-div third-image " style="background:url(<?php the_field( 'row_3_right_image' ); ?>) top center no-repeat;">

			</div>


			<div class="row callout gray ">
				<div class="left-text">

					<?php the_field( 'callout_area_text_2' ); ?>


				</div>

				<!--div class="cta-right">
					<a class="button ">Learn More</a>
				</div-->

			</div><!-- callout -->




			<div class="image-div sixth-image " style="background:url(<?php the_field( 'bottom_top_left_image_2' ); ?>) top center no-repeat;">

			</div>

			<div class="green right ">

				<h3 class="line"><?php the_field( 'bottom_right_heading_2' ); ?></h3>
				<?php the_field( 'bottom_right_content_2' ); ?>

			</div>



			<!--div class="blue-reverse left grid-order-eleven">

							<h3 class="line">We've Got you Covered!</h3>
								<p>It’s inevitable. At some point, nearly every company
								faces workplace iniuries and must address complicated
								workers’ compensation issues. Often the sheer volume of
								mandatory paperwork, reports, and billing statements
								can make it difficult to monitor medical and
								rehabilitation costs in an efficient manner. We will ensure
								that you pay only what you owe on your workers’
								compensation claims.</p>
								<p>
								We were founded in 2001 boasting a large client base in
								Iowa, Minnesota, Nebraska, and South Dakota. Our staff
								has over 100+ years of combined experience in the
								medical environment and is dedicated solely to workers’
								</p>
			</div>

			<div class="image-div first-image " style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/about-right-1.png) top center no-repeat;">

			</div-->



			<div class="row gray-map">
				<div class="left-text">

				<?php the_field( 'callout_area_2_text_(copy)' ); ?>

				</div>

				<div class="map-right">
					<img src="<?php the_field( 'callout_area_2_image_(copy)' ); ?>" alt="US Map">
				</div>

			</div><!-- callout -->



					<!--div class="image-div fifth-image grid-order-eight" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/home-bottom.png) center center no-repeat;">

						</div>
						<div class="red right grid-order-nine">

							<h3 class="line">Nurse Audit</h3>
							<p>Lorem ipsum doler sit amet ipsum doler sit
									Lorem ipsum doler sit amet</p>

					</div-->



					<div class="image-div first-image" style="background:url(<?php the_field( 'bottom_left_image_final' ); ?>) top center no-repeat;">

					</div>

					<div class="blue-reverse right">

						<h3 class="line"><?php the_field( 'bottom_right_heading_final' ); ?></h3>
							<?php the_field( 'bottom_right_content_final' ); ?>
					</div>






						<div class="row callout" style="min-height:400px;background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/pattern@2x.png) center center no-repeat;background-size: cover;">
							<div class="left-text">
								<?php the_field( 'callout_area_3_text_2' ); ?>
							</div>

							<div class="circle-chart">
								<img src="<?php the_field( 'callout_area_3_image_2' ); ?>" alt="">
							</div>

						</div><!-- callout -->

						<!--div class="image-div second-image grid-order-five" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/support-1-l.png) center center no-repeat;">

						</div>
					<div class="blue right">

							<h3 class="line left-text">Key Elements of the PBR Medical Bill <br>Review Process Include</h3>
								<ul>
									<li>Up-to-date state regulated fee schedule adiustments, UCR </li>
									<li>Precision coding review</li>
									<li> Sophisticated duplicate bill detection</li>
									<li> Online claim system integration</li>
									<li> High level reviews on large dollar claims based on your
									unique specifications</li>
									<li>Client Web Portal for reports access and bill review</li>
								</ul>
								<p class="left-text">Our bill review services can even be performed on-</p>

					</div>


					<div class="red-reverse left grid-order-four">

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

					<div class="image-div third-image grid-order-six" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/red-1-r.png) top center no-repeat;">

					</div-->



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
