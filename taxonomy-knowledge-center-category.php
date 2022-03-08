<?php defined('ABSPATH') || exit('Forbidden');

global $post;

$term = get_queried_object();

$query_args = [
    'post_type' => ['knowledge-center'],
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'tax_query' => [
        [
            'taxonomy' => 'knowledge-center-category',
            'field' => 'slug',
            'terms' => [$term->slug],
            'operator' => 'IN',
        ]
    ],
];

$query = new WP_Query($query_args);


?>
<?php get_header(); ?>

<section class="section section--grey section--wide">
    <div class="section__container">
        <div class="section__header">
            <h1 class="heading-2">Artikelen over <strong><?= $term->name; ?></strong></h1>
            <p><?= $term->description; ?></p>

        </div>
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


<?php get_footer(); ?>