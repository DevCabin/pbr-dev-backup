<?php
/**
 * Template Name: PBR
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_X_Starter_Theme
 */


get_header(); ?>
	<div class="grid-four">
			<div class="banner sub-banner" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/page_banner_9.png) top center no-repeat; height: 407px; margin-bottom: 6px;">
				<div class="banner-text">
					<h2>Join the Team</h2>
					<p>Lorem ipsum doler</p>
				</div>
			</div>

			<div class="blue-reverse left">

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

			</div>



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
