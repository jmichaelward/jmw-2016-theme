<?php
/**
 * The template for displaying the header
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package jmw-2016
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jmw2016' ); ?></a>

	<nav class="main-navigation">
		<div class="main-navigation__toggle"></div>
		<?php JMW2016\main_menu(); ?>
	</nav>

	<div class="page__wrapper">
		<header class="site-branding">
			<div class="site-branding__logo-container">
				<div class="site-branding__logo">
					<a class="site-branding__home-link" href="<?php echo esc_url( home_url() ); ?>"></a>
				</div>
			</div>

			<div class="site-details">
				<h1 class="site-details__title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-details__description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</header>

		<div id="content" class="site-content">
