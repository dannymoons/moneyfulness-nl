<?php defined('ABSPATH') || exit('Forbidden');

global $post;

// $term = get_queried_object();
$terms = get_the_terms($post->ID, 'blog-category');
$category = $terms[0];
$currentID = get_the_ID();
// $category = array_pop($terms);
$query_args = [
    'post_type' => ['blog'],
    'post_status' => 'publish',
    'posts_per_page' => '5',
    'post__not_in' => [$currentID],
    'tax_query' => [
        [
            'taxonomy' => 'blog-category',
            'field' => 'slug',
            'terms' => $category,
            'operator' => 'IN',
        ]
    ],
];

$query = new WP_Query($query_args);
?>

<?php

if ($query->have_posts()) : ?>

    <div class="sidebar__widget">
        <p class="sidebar__title">Meer berichten in <strong><?= $category->name; ?></strong></p>
        <div class="recent-posts">


            <?php
            while ($query->have_posts()) {
                $query->the_post();

                if ($post_type === 'blog') {
                    get_template_part('templates/layout/layout', 'post-recent-h');
                }
            }
            wp_reset_postdata();

            ?>

            <div class="recent-posts__btn">
                <a href="/blog/" class="btn btn--secondary btn--sm">Bekijk meer berichten</a>
            </div>
        </div>
    </div>

<?php endif; ?>

<!-- BACKUP
<div class="sidebar__widget">
    <p class="sidebar__title">Recente berichten</p>
    <div class="recent-posts"> -->
<?php

// if ($query->have_posts()) {
//     while ($query->have_posts()) {
//         $query->the_post();

//         if ($post_type === 'blog') {
//             get_template_part('templates/component/component', 'post-recent-h');
//         }
//     }
//     wp_reset_postdata();
// }
?>

<!-- <div class="recent-posts__btn">
    <a href="/blog/" class="btn btn--ghost btn--sm">Meer berichten</a>
</div>
</div>
</div> -->