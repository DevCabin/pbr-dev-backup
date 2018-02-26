<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_X_Starter_Theme
 */
global $redux_options;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xstart' ); ?></a>

	<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="site-title">
					<a href="<?php echo site_url();?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
					</a>
				</div>
				<?php
				/*
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
				endif;
				*/
				?>
			</div><!-- .site-branding -->

			<div class="top-right">
				<?php dynamic_sidebar( 'sidebar-top' ); ?>
				<ul>
					<li><?php echo $redux_options['top-text-left'] ;?></li>
					<li><span class="blue-span">|</span> </li>
					<li><a href="<?php echo $redux_options['top-text-right-link'] ;?>"><?php echo $redux_options['top-text-right'] ;?></a></li>
				</ul>
			</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xstart' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
