<?php defined('ABSPATH') || exit('Forbidden');

/** customizer - Adds additional Wordpress customizer functionality for the MoonsIO theme
 *
 *
 */

/** Function to create the Footer Panel
 * 
 * Layouts
 * Copyright
 * 
 */

function moonsio_customizer_create_footer_panel($wp_customizer)
{
	// PANELS
	$wp_customizer->add_panel('footer_panel', [
		'title' => __('Footer', 'moonsio'),
		'priority' => 101,
	]);

	// SECTIONS
	$wp_customizer->add_section('footer_section', [
		'title' => __('Footer Opties', 'moonsio'),
		'priority' => 1,
		'panel' => 'footer_panel'
	]);

	// SETTINGS
	// SETTINGS FOR FOOTER LAYOUTS
	$wp_customizer->add_setting('footer_setting_layouts', [
		'default' => 1,
		'transport' => 'refresh'
	]);

	$wp_customizer->add_setting('footer_setting_copyright', [
		'default' => 'moons.io',
		'transport' => 'refresh'
	]);

	// CONTROLS
	// CONTROLS FOR FOOTER LAYOUTS ('footer_section_layouts')
	$wp_customizer->add_control('footer_control_layouts', [
		'type' => 'radio',
		'choices' => array(
			1 => __('Layout 1', 'moonsio'),
			2 => __('Layout 2', 'moonsio'),
			3 => __('Layout 3', 'moonsio'),
		),
		'priority' => 1,
		'label' => __('Footer Layouts', 'moonsio'),
		'section' => 'footer_section',
		'settings' => 'footer_setting_layouts'
	]);

	$wp_customizer->add_control('footer_control_copyright', [
		'type' => 'text',
		'priority' => 2,
		'label' => __('Copyright', 'moonsio'),
		'section' => 'footer_section',
		'settings' => 'footer_setting_copyright'
	]);
}

/** Register and use customizer for Moonsio theme
 *  Allows user to customize aspects of site
 * 
 * Footer Panel
 *
 */

function moonsio_register_customizer($wp_customizer)
{
	// Footer Panel
	moonsio_customizer_create_footer_panel($wp_customizer);
}
add_action('customize_register', 'moonsio_register_customizer', 10, 1);
