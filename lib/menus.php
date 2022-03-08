<?php defined('ABSPATH') || exit('Forbidden');

function moonsio_navigation_menus()
{
	register_nav_menus([
		'navbar-menu' => __('Navbar Menu', 'moonsio'),
		'topbar-menu' => __('Topbar Menu', 'moonsio'),
		'footer-locations' => __('Footer locaties', 'moonsio'),
		'footer-menu' => __('Footer menu', 'moonsio'),
		'footer-products' => __('Footer producten', 'moonsio'),
	]);
}
add_action('init', 'moonsio_navigation_menus', 10, 0);
