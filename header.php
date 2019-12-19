<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fenchurch_Barbers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fenchurch-barbers' ); ?></a>

	<header id="masthead" class="site-header">
		<h1>
			Fenchurch Barbers
			<span class="sub-heading"><img src="<?php echo bloginfo('url'); ?>/wp-content/themes/fenchurch-barbers/public/imgs/door-icn.svg"/><span>Monday - Friday. 08:00 - 19:00</span></span>
		</h1>
		<nav>
			<div id="services">services & prices</div>
			<div id="contact">contact</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
