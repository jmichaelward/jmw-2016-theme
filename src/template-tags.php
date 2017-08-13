<?php
/**
 * Helper functions for outputting template content.
 *
 * @package jmw-2016
 */

namespace JMW2016;

/**
 * The main menu.
 */
function main_menu() {
	wp_nav_menu( [
		'menu_class'     => 'jmw-main-menu',
		'theme-location' => 'main-menu',
	] );
}
