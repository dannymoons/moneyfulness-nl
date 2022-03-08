<?php defined('ABSPATH') || exit('Forbidden');

/** IMAGE SIZES
 * 
 * hero_bg_full | w: 2560px h: 1440px 
 * hero_bg_half | 2560 x 720
 * hero_bg_1920 | 1920 x 1080
 * content_large | 1024 x __
 * content_regular | 768 x __ 
 * blog_featured | 1400 x 750
 * card | 450 x 270
 * 
 * 1400w | 1400 x __
 * 1200w | 1200 x __
 * 960w | 960 x __
 * 375w | 375 x __
 */


// WIDTH AND HEIGHT IMAGES
add_image_size('hero_bg_full', 2560, 1440, true);
add_image_size('hero_bg_half', 2560, 720, true);
add_image_size('hero_bg_1920', 1920, 1080, true);
add_image_size('blog_featured', 1400, 750, true);
add_image_size('card', 450, 270, true);
// add_image_size('thumbnail', 150, 150, true);


// WIDTH ONLY IMAGES
add_image_size('content_large', 1024, 9999);
add_image_size('content_regular', 768, 9999);
add_image_size('1400w', 1400, 9999);
add_image_size('1200w', 1200, 9999);
add_image_size('960w', 960, 9999);
// add_image_size('600w', 600, 9999);
add_image_size('375w', 375, 9999);


/**
 * Return the default placeholder image of the theme.
 * 
 * @param array optional $args
 * 
 * @return string
 */

function moonsio_placeholder(?array $args = []): string
{
	$path = get_template_directory_uri() . '/dist/placeholder.png';

	if (!isset($args['alt'])) $args['alt'] = '';
	if (!isset($args['loading'])) $args['loading'] = 'lazy';

	$attributes_arr = array_map(function (string $key, string $value) {
		return sprintf('%s="%s"', $key, $value);
	}, array_keys($args), array_values($args));

	$attributes_str = implode(' ', $attributes_arr);

	return file_exists(get_theme_file_path('/dist/placeholder.png')) ? sprintf('<img src="%s" %s />', $path, $attributes_str) : '';
}

/**
 * Will echo `wp_get_attachment_image` if the image ID is valid,
 * otherwise echo `moonsio_placeholder`
 * 
 * @param int $id optional
 * @param string $size optional
 * @param array $args optional
 * 
 * @return string
 */

function moonsio_image(?int $id = null, ?string $size = 'content_regular', ?array $args = [])
{
	if (wp_attachment_is_image($id)) {
		echo wp_get_attachment_image($id, $size, false, $args);
	} else {
		echo moonsio_placeholder($args);
	}
}
