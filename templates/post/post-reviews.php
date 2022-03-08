<?php defined('ABSPATH') || exit('Forbidden');

[
    'review_style' => $reviews_styling['style'],
    'reviews' => $reviews_content['reviews'],
] = $args;

$style = $reviews_styling['style'];
$reviews = $reviews_content['reviews'];
$query_args = [
    'post_type' => ['review'],
    'post_status' => 'publish',
    'posts_per_page' => '3',
    'post__in' => $reviews,
];
$query = new WP_Query($query_args);

?>

<?php

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        get_template_part('templates/component/component', 'testimonial-1', [
            'reviews' => $reviews,
            'style' => $style,
        ]);
    }
    wp_reset_postdata();
}

?>