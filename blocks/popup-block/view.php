<?php defined('ABSPATH') || exit('Forbidden');

$popup = get_field('popup_data_popup');

$query_args = [
    'post_type' => ['popup'],
    'post_status' => 'publish',
    'posts_per_page' => '1',
    'post__in' => [$popup],
];

// if ($posts) {
//     $query_args['post__in'] = $posts;
// }

$query = new WP_Query($query_args);

?>

<?php

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        get_template_part('templates/component/component', 'popup', [
            // 'style' => $style,
        ]);
    }
    wp_reset_postdata();
}

?>