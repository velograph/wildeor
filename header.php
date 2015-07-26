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

			<ul>

				<li>
					<a href="<?php the_field('instagram_link', 27); ?>" target="_blank">
						<svg version="1.1" id="Instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
						<path style="fill:#002c61" d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h14c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z M9.984,15.523
							c3.059,0,5.538-2.481,5.538-5.539c0-0.338-0.043-0.664-0.103-0.984H17v7.216c0,0.382-0.31,0.69-0.693,0.69H3.693
							C3.31,16.906,3,16.598,3,16.216V9h1.549C4.488,9.32,4.445,9.646,4.445,9.984C4.445,13.043,6.926,15.523,9.984,15.523z M6.523,9.984
							c0-1.912,1.55-3.461,3.462-3.461c1.911,0,3.462,1.549,3.462,3.461s-1.551,3.462-3.462,3.462C8.072,13.446,6.523,11.896,6.523,9.984z
							 M16.307,6h-1.615C14.31,6,14,5.688,14,5.308V3.691C14,3.309,14.31,3,14.691,3h1.615C16.69,3,17,3.309,17,3.691v1.616
							C17,5.688,16.69,6,16.307,6z"/>
						</svg>
					</a>
				</li>

				<li>
					<a href="<?php the_field('tumbler_link', 27); ?>" target="_blank">
						<svg version="1.1" id="Tumblr" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
						<path style="fill:#002c61" d="M15.6,18.196c-0.777,0.371-1.48,0.631-2.109,0.781c-0.63,0.148-1.311,0.223-2.043,0.223c-0.831,0-1.566-0.107-2.205-0.318
							c-0.639-0.213-1.183-0.516-1.635-0.908c-0.451-0.395-0.764-0.812-0.938-1.254c-0.174-0.443-0.261-1.086-0.261-1.926V8.339H4.4V5.735
							c0.714-0.234,1.326-0.57,1.835-1.01c0.51-0.438,0.918-0.965,1.227-1.58C7.77,2.532,7.981,1.749,8.098,0.8h2.585v4.652h4.314v2.887
							h-4.314v4.719c0,1.066,0.056,1.752,0.168,2.055c0.111,0.303,0.319,0.545,0.622,0.725c0.403,0.244,0.863,0.367,1.381,0.367
							c0.92,0,1.836-0.303,2.746-0.908V18.196z"/>
						</svg>
					</a>
				</li>

				<li>
					<a href="<?php the_field('facebook_link', 27); ?>" target="_blank">
						<svg version="1.1" id="Facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
						<path style="fill:#002c61" d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h7v-7H8V9.525h2V7.475c0-2.164,1.212-3.684,3.766-3.684l1.803,0.002v2.605
							h-1.197C13.378,6.398,13,7.144,13,7.836v1.69h2.568L15,12h-2v7h4c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z"/>
						</svg>
					</a>
				</li>

				<li>
					<a href="<?php the_field('twitter_link', 27); ?>" target="_blank">
						<svg version="1.1" id="Twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
						<path style="fill:#002c61;" d="M17.316,6.246c0.008,0.162,0.011,0.326,0.011,0.488c0,4.99-3.797,10.742-10.74,10.742c-2.133,0-4.116-0.625-5.787-1.697
							c0.296,0.035,0.596,0.053,0.9,0.053c1.77,0,3.397-0.604,4.688-1.615c-1.651-0.031-3.046-1.121-3.526-2.621
							c0.23,0.043,0.467,0.066,0.71,0.066c0.345,0,0.679-0.045,0.995-0.131c-1.727-0.348-3.028-1.873-3.028-3.703c0-0.016,0-0.031,0-0.047
							c0.509,0.283,1.092,0.453,1.71,0.473c-1.013-0.678-1.68-1.832-1.68-3.143c0-0.691,0.186-1.34,0.512-1.898
							C3.942,5.498,6.725,7,9.862,7.158C9.798,6.881,9.765,6.594,9.765,6.297c0-2.084,1.689-3.773,3.774-3.773
							c1.086,0,2.067,0.457,2.756,1.191c0.859-0.17,1.667-0.484,2.397-0.916c-0.282,0.881-0.881,1.621-1.66,2.088
							c0.764-0.092,1.49-0.293,2.168-0.594C18.694,5.051,18.054,5.715,17.316,6.246z"/>
						</svg>
					</a>
				</li>

			</ul>

		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
