<?php defined('ABSPATH') || exit('Forbidden');

function moonsio_acf_options()
{
	foreach (glob(get_template_directory() . '/lib/acf/*.php') as $file) {
		require_once $file;
	}
}
add_action('acf/init', 'moonsio_acf_options', 10, 0);
