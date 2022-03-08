<?php defined('ABSPATH') || exit('Forbidden');

// $title = get_field('');
// $location = get_field('');
// $venue = get_field('');
// $starttime = get_field('');
// $endtime = get_field('');
// $price = get_field('');
// $ticket_link = get_field('');
global $post;
$ID = get_the_ID();
$date = get_field('event_date_field', $ID);

$query_args = [
    'post_type' => ['event'],
    'post_status' => 'publish',
    'posts_per_page' => '999',
    'meta_key' => 'event_date',
    'orderby' => 'event_date',
    'order' => 'ASC',
];


$query = new WP_Query($query_args);

?>

<section class="section section--wide">
    <div class="section__container">
        <div class="event-overview">

            <?php

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    get_template_part('templates/component/component', 'event-item', [
                        // 'style' => $style,
                    ]);
                }
                wp_reset_postdata();
            }

            ?>

        </div>
    </div>
</section>