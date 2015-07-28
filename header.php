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

	<header class="mobile-header">

		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php the_field('header_logo', 27); ?>" />
			</a>
		</div><!-- .site-branding -->

		<div class="slide-out">

			<div class="mobile-navigation">

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->

				<div class="utility-header">
					<span class="cart-link">
						<a href="/cart">
							<svg version="1.1" id="Shopping_cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
								 y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
							<path d="M13,17c0,1.104,0.894,2,2,2c1.104,0,2-0.896,2-2c0-1.106-0.896-2-2-2C13.894,15,13,15.894,13,17z M3,17c0,1.104,0.895,2,2,2
								c1.103,0,2-0.896,2-2c0-1.106-0.897-2-2-2C3.895,15,3,15.894,3,17z M6.547,12.172L17.615,9.01C17.826,8.949,18,8.721,18,8.5V3H4V1.4
								C4,1.18,3.819,1,3.601,1H0.399C0.18,1,0,1.18,0,1.4L0,3h2l1.91,8.957L4,12.9v1.649c0,0.219,0.18,0.4,0.4,0.4H17.6
								c0.22,0,0.4-0.182,0.4-0.4V13H6.752C5.602,13,5.578,12.449,6.547,12.172z"/>
							</svg>
							<span class="cart-count">(<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>)</span>
						</a>
					</span>
					<span class="account-link"><a href="/my-account">Account</a></span>
				</div>

			</div>

			<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
				<label>
					<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
				</label>
			</form>

			<?php echo get_template_part('partials/social', 'media'); ?>

		</div>

		<div class="menu-hook-container">
			<span class="menu-hook">Menu</span>
		</div>

	</header>

	<header id="masthead" class="desktop-header" role="banner">

		<div class="utility-header">
			<span class="account-link"><a href="/my-account">Account</a></span>
			<span class="cart-link">
				<a href="/cart">
					<svg version="1.1" id="Shopping_cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						 y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
					<path d="M13,17c0,1.104,0.894,2,2,2c1.104,0,2-0.896,2-2c0-1.106-0.896-2-2-2C13.894,15,13,15.894,13,17z M3,17c0,1.104,0.895,2,2,2
						c1.103,0,2-0.896,2-2c0-1.106-0.897-2-2-2C3.895,15,3,15.894,3,17z M6.547,12.172L17.615,9.01C17.826,8.949,18,8.721,18,8.5V3H4V1.4
						C4,1.18,3.819,1,3.601,1H0.399C0.18,1,0,1.18,0,1.4L0,3h2l1.91,8.957L4,12.9v1.649c0,0.219,0.18,0.4,0.4,0.4H17.6
						c0.22,0,0.4-0.182,0.4-0.4V13H6.752C5.602,13,5.578,12.449,6.547,12.172z"/>
					</svg>
					<span class="cart-count">(<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>)</span>
				</a>
			</span>
			<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
				<label>
					<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
				</label>
			</form>
		</div>

		<div class="main-navigation">

			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php the_field('header_logo', 27); ?>" />
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php echo get_template_part('partials/social', 'media'); ?>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="content-container">
