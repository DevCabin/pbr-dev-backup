<?php
/**
 * Template Name: Cost Containment
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */


get_header(); ?>

			<div class="banner sub-banner grid-order-one" style="background:url(<?php the_field( 'banner_image_(copy)' ); ?>) top center no-repeat; height: 407px; margin-bottom: 6px;">

				<div class="banner-text">
					<?php the_field( 'banner_area_text_(copy)' ); ?>
				</div>

			</div>


			<div class="green left">

				<h3 class="line"><?php the_field( 'top_left_heading_(copy)' ); ?></h3>
				<?php the_field( 'top_left_content_(copy)' ); ?>
				<!--<ul>
					<li>Hospitals</li>
					<li>Doctors</li>
					<li>Specialists</li>
					<li>Dental Assistants</li>
				</ul>
				<p>Lorem ipsum doler sit amet ipsum doler sit
					Lorem ipsum doler sit amet</p>-->

			</div>


				<div class="image-div first-image grid-order-three" style="background:url(<?php the_field( 'top_right_image_(copy)' ); ?>) top center no-repeat;">

				</div>

<!--
====================================================
End Row one
====================================================
-->

				<div class="image-div second-image grid-order-five" style="background:url(<?php the_field( 'row_2_left_image_(copy)' ); ?>) center center no-repeat;">

				</div>
			<div class="blue right">

					<h3 class="line left-text"><?php the_field( 'row_2_right_heading_(copy)' ); ?></h3>
					<?php the_field( 'row_2_right_text_(copy)' ); ?>
						<!--<ul>
							<li>Up-to-date state regulated fee schedule adiustments, UCR </li>
							<li>Precision coding review</li>
							<li> Sophisticated duplicate bill detection</li>
							<li> Online claim system integration</li>
							<li> High level reviews on large dollar claims based on your
							unique specifications</li>
							<li>Client Web Portal for reports access and bill review</li>
						</ul>
						<p class="left-text">Our bill review services can even be performed on-</p>-->

			</div>

			<!--
			====================================================
			End Row two
			====================================================
			-->

			<div class="red-reverse left grid-order-four">

				<h3 class="line"><?php the_field( 'row_3_left_heading_(copy)' ); ?></h3>

					<?php the_field( 'row_3_left_text_(copy)' ); ?>

			</div>

			<div class="image-div third-image grid-order-six" style="background:url(<?php the_field( 'row_3_right_image_(copy)' ); ?>) top center no-repeat;">

			</div>


			<!--
			====================================================
			End Row Three
			====================================================
			-->

			<div class="row callout gray grid-order-seven">

				<?php the_field( 'callout_area_text_(copy)' ); ?>
				<!--
				<div class="left-text">

					<h4>Learn more about our features</h4>

				</div>

				<div class="cta-right">
					<a class="button ">Learn More</a>
				</div>
			-->

			</div><!-- callout -->




			<div class="image-div sixth-image  grid-order-nine" style="background:url(<?php the_field( 'row_4_left_image_(copy)' ); ?>) top center no-repeat;">

			</div>

			<div class="green right grid-order-twelve">

				<h3 class="line"><?php the_field( 'row_4_right_heading_(copy)' ); ?></h3>
				<?php the_field( 'row_4_right_text_(copy)' ); ?>
			</div>

			<!--
			====================================================
			End Row four - after gray callout
			====================================================
			-->


			<div class="blue-reverse left grid-order-eleven">

							<h3 class="line"><?php the_field( 'row_5_left_heading_(copy)' ); ?></h3>
								<?php the_field( 'row_5_left_text_(copy)' ); ?>
			</div>

			<div class="image-div first-image " style="background:url(<?php the_field( 'row_5_right_image_(copy)' ); ?>) top center no-repeat;">

			</div>

			<!--
			====================================================
			End Row five
			====================================================
			-->


					<div class="image-div fifth-image grid-order-eight" style="background:url(<?php the_field( 'cc_row_6_left_image' ); ?>) center center no-repeat;">

						</div>
						<div class="red right grid-order-nine">

							<h3 class="line"><?php the_field( 'cc_row_6_right_heading' ); ?></h3>

							<?php the_field( 'cc_row_6_right_text' ); ?>

					</div>

					<!--
					====================================================
					End Row six
					====================================================
					-->

					<div class="green-reverse left grid-order-fourteen">

						<h3 class="line"><?php the_field( 'row_7_left_heading_(copy)' ); ?></h3>
							<?php the_field( 'row_7_left_text_(copy)' ); ?>
					</div>

					<div class="image-div first-image grid-order-fifteen" style="background:url(<?php the_field( 'row_7_right_image_(copy)' ); ?>) top center no-repeat;">

					</div>


					<!--
					====================================================
					End Row seven
					====================================================
					-->



						<div class="row callout nomap grid-order-thirteen" style="min-height:300px;background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/pattern@2x.png) center center no-repeat;background-size: cover;">
							<div class="left-text">
								<!--h3>We Save You</h3>
								<h4>Precision Bill Review saved<br>
								our clients 47.38%</h4>
								<a class="button button-solid green">Learn More</a-->
								<?php the_field( 'callout_area_2_text_(copy)' ); ?>
							</div>

							<div class="circle-chart">
								<img src="<?php the_field( 'callout_area_2_image_(copy)' ); ?>" alt="<?php the_field( 'cc_callout_area_2_text' ); ?>">
							</div>

						</div><!-- callout -->







					<div class="image-div second-image grid-order-five" style="background:url(<?php the_field( 'bottom_top_left_image_(copy)' ); ?>) center center no-repeat;">

					</div>

					<div class="blue right">

							<h3 class="line left-text"><?php the_field( 'bottom_top_right_heading_(copy)' ); ?></h3>

								<?php the_field( 'bottom_top_right_content_(copy)' ); ?>

					</div>


					<!--
					====================================================
					End Row eight
					====================================================
					-->

					<div class="red-reverse left grid-order-four">

						<h3 class="line"><?php the_field( 'bottom_left_heading_(copy)' ); ?></h3>
							<?php the_field( 'bottom_left_content_(copy)' ); ?>

					</div>

					<div class="image-div third-image grid-order-six" style="background:url(<?php the_field( 'bottom_right_image_(copy)' ); ?>) top center no-repeat;">

					</div>

					<!--
					====================================================
					End Row nine - last row
					====================================================
					-->

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
