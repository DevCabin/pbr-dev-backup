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
global $redux_options;
?>



	<footer id="colophon" class="site-footer">
		<div class="prefooter">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
		</div>
		<div class="contact-left">
			<h3 class="line">605.362.5699</h3>
		</div>
		<div class="contact-right">
			<h3 class="line">
				<a href="http://www.talispoint.com/login/" target="_blank" rel="noopener">Provider Portal</a>
			</h3>
		</div>

		<div class="footer-menu">

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				) );
			?>

			<!--ul id="footer-menu" class="menu">
			    <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="../about/">About</a></li>
			    <li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228"><a href="../services/">Services</a></li>
			    <li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="../analytics/">Analytics</a></li>
			    <li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249"><a href="../customer-care/">Customer Care</a></li>
			    <li id="menu-item-182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-182"><a href="../contact/">Contact</a></li>
			</ul-->
		</div>


		<div class="site-info-left">
			<p><?php echo $redux_options['bottom-text-left'] ;?></p>
		</div><!-- .site-info -->
		<div class="site-info-right">
			<p><?php echo $redux_options['bottom-text-right'] ;?></p>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

	</div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
