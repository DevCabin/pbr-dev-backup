<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_X_Starter_Theme
 */

?>



	<footer id="colophon" class="site-footer">
		<div class="prefooter">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
		</div>
		<div class="contact-left">
			<h3 class="line">605.362.5699</h3>
		</div>
		<div class="contact-right">
			<h3 class="line"><a href="#">Provider Portal</a></h3>
		</div>

		<div class="footer-menu">
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>


		<div class="site-info-left">
			<p>Prcision Bill Review et al</p>
		</div><!-- .site-info -->
		<div class="site-info-right">
			<p>&copy; 2018 PBR Etc Lorem ipsum doler sit amet</p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
