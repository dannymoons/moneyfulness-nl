<?php defined('ABSPATH') || exit('Forbidden');

global $post;

$term = get_queried_object();

$query_args = [
    'post_type' => ['blog'],
    'post_status' => 'publish',
    'posts_per_page' => '-1',
    // 'offset' => '2',
    'tax_query' => [
        [
            'taxonomy' => 'blog-category',
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
            <h1 class="heading-2">Blogs in de categorie <strong><?= $term->name; ?></strong></h1>
            <p><?= $term->description; ?></p>
        </div>
        <div class="grid grid--archive">
            <?php

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    get_template_part('templates/layout/layout', 'post-recent-h');
                }
                wp_reset_postdata();
            }

            ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>