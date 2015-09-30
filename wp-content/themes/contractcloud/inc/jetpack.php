<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package contractcloud
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function contractcloud_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'type'      => 'click',
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'contractcloud_jetpack_setup' );
