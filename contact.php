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
	<div class="grid-three">
			<div class="banner sub-banner" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/img/page_banner_9.png) top center no-repeat; height: 407px; margin-bottom: 6px;">
				<div class="banner-text">
					<h2>Join the Team</h2>
					<p>Lorem ipsum doler</p>
				</div>
			</div>

			<div class="blue-reverse left contact-left">

						<p>
								We were founded in 2001 boasting a large client base in
								Iowa, Minnesota, Nebraska, and South Dakota. Our staff
								has over 100+ years of combined experience in the
								medical environment and is dedicated solely to workers’
								</p>
			</div>

			<div class="right-form">
				<form>
					<input type="text"></input>
					<input type="text"></input>
					<input type="text"></input>
					<input type="text"></input>
					<textarea></textarea>
				</form>

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
