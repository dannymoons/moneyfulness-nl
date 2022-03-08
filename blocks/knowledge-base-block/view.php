<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$ID = get_the_ID();
$title = get_the_title();


$query_args = [
    'post_type' => ['knowledge-center'],
    'post_status' => 'publish',
    'orderby' => 'title',
    'order'   => 'ASC',
];

$query = new WP_Query($query_args);

?>


<section class="section section--grey section--wide">
    <div class="section__container">

        <?php get_template_part('templates/component/component', 'category-overview'); ?>

        <div class="grid grid--knowledge-center">
            <?php

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    get_template_part('templates/component/component', 'knowledge-center-item', [
                        'style' => $style,
                    ]);
                }
                wp_reset_postdata();
            }

            ?>
        </div>
    </div>
</section>