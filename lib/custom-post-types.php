<?php defined('ABSPATH') || exit('Forbidden');

function moonsio_post_types()
{
    foreach (glob(get_template_directory() . '/lib/post-types/*.php') as $file) {
        require_once $file;
    }
}
add_action('init', 'moonsio_post_types', 10, 0);

function moonsio_edit_post_types($args, $post_type)
{
    switch ($post_type) {
        case 'post':
            $args['public'] = false;
    }
    return $args;
}
add_filter('register_post_type_args', 'moonsio_edit_post_types', 10, 2);
