<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Wildeor
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Wildeor' ); ?></a>

	<header id="masthead" class="header" role="banner">

		<div class="utility-header">
			<a href="/my-account">My Account</a>
			<a href="/cart">Cart</a>
			<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form>
		</div>

		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php the_field('header_logo', 27); ?>" />
			</a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="social-media-bar">

			<?php echo get_template_part('partials/social', 'media'); ?>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="content-container">
