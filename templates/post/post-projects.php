<?php defined('ABSPATH') || exit('Forbidden');

[
    'projects' => $projects_content['projects'],
] = $args;

$projects = $projects_content['projects'];

$style = 'card--overlay';

$query_args = [
    'post_type' => ['project'],
    'post_status' => 'publish',
    'posts_per_page' => '4',
    'post__in' => $projects,
    // 'orderby' => [$order_by => $post_order],
];

$query = new WP_Query($query_args);
?>

<?php

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        get_template_part('templates/component/component', 'post-card', [
            'projects' => $projects,
            'style' => $style,
        ]);
    }
    wp_reset_postdata();
}

?>