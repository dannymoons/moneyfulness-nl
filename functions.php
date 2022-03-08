<?php

/** 
 * PHP Functionality for WordPress Theme
 */

// Add Theme Supports
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Disallow the theme editor
if (!defined('DISALLOW_FILE_EDIT')) {
	define('DISALLOW_FILE_EDIT', true);
}

// Load Styles and Scripts
function add_theme_scripts()
{
	wp_enqueue_style('moonsio-styles', get_template_directory_uri() . '/dist/style.css', [], null);
	wp_enqueue_script('moonsio-scripts', get_template_directory_uri() . '/dist/script.js', [], null);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts', 10, 0);

// Load Gutenberg Editor Styles
add_theme_support('editor-styles');
add_editor_style(get_template_directory_uri() . '/dist/style.css');

// Admin styles

add_action('admin_enqueue_scripts', 'my_admin_style', 10, 0);

function my_admin_style()
{
	wp_enqueue_style('admin-style', get_template_directory_uri() . '/admin/style.css');
}

// Load Advanced Custom Field related JavaScript
function add_acf_scripts()
{
	wp_enqueue_script('moonsio-acf', get_template_directory_uri() . '/assets/js/moonsio-acf.js', [], null);
}
add_action('acf/input/admin_enqueue_scripts', 'add_acf_scripts', 10, 0);

// Disable GF scroll
add_filter('gform_confirmation_anchor', '__return_false');

// Load in Theme functionality
require_once 'lib/init.php';
