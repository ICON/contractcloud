<?php
/**
 * Contract Cloud Theme Customizer
 *
 * @package contractcloud
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function contractcloud_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'contractcloud_customize_register' );

/**
 * Ootions for WordPress Theme Customizer.
 */
function contractcloud_customizer( $wp_customize ) {

	// add "Content Options" section
	$wp_customize->add_section( 'contractcloud_content_section' , array(
		'title'      => esc_html__( 'Content Options', 'contractcloud' ),
		'priority'   => 50,
	) );

	// add setting for excerpts/full posts toggle
	$wp_customize->add_setting( 'contractcloud_excerpts', array(
		'default'           => 1,
		'sanitize_callback' => 'contractcloud_sanitize_checkbox',
	) );

	// add checkbox control for excerpts/full posts toggle
	$wp_customize->add_control( 'contractcloud_excerpts', array(
		'label'     => esc_html__( 'Show post excerpts?', 'contractcloud' ),
		'section'   => 'contractcloud_content_section',
		'priority'  => 10,
		'type'      => 'checkbox'
	) );

	$wp_customize->add_setting( 'contractcloud_page_comments', array(
		'default' => 1,
		'sanitize_callback' => 'contractcloud_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'contractcloud_page_comments', array(
	'label'		=> esc_html__( 'Display Comments on Static Pages?', 'contractcloud' ),
	'section'	=> 'contractcloud_content_section',
	'priority'	=> 20,
	'type'      => 'checkbox',
) );
}
add_action( 'customize_register', 'contractcloud_customizer' );



/**
 * Sanitzie checkbox for WordPress customizer
 */
function contractcloud_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function contractcloud_customize_preview_js() {
	wp_enqueue_script( 'contractcloud_customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), '20140317', true );
}
add_action( 'customize_preview_init', 'contractcloud_customize_preview_js' );
