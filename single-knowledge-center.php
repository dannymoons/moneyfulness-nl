<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$title = get_the_title();
$terms = get_the_terms($post->ID, 'knowledge-center-category');
$currentID = get_the_ID();

$query_args = [
    'post_type' => 'knowledge-center',
    'post_status' => 'publish',
    'posts_per_page' => '3',
    'post__not_in' => [$currentID],

];

$query = new WP_Query($query_args);
?>

<?php get_header(); ?>


<section class="single-post single-post--simple">
    <div class="single-post__container">
        <div class="single-post__content">

            <div class="single-post__header">
                <h1 class="single-post__title">

                    <?= $title; ?>

                </h1>

                <?php if ($terms) : ?>

                    <span> Geplaatst in: </span>

                    <?php foreach ($terms as $term) : ?>

                        <a href="<?= get_term_link($term); ?>" class="single-post__meta-item">
                            <?= $term->name; ?>
                        </a>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>
            <div class="single-post__body">

                <?= the_content(); ?>

            </div>
        </div>

        <div class="single-post__sidebar sidebar">
            <div class="sidebar__widget">
                <p class="sidebar__title">Andere artikelen</p>
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
    </div>
</section>
<section class="section section--wide">
    <div class="section__container  text-center">
        <div class="section__header">
            <h2 class="heading-2">Meer lezen?</h2>
        </div>
        <a href="/kennisbank/" class="btn btn--primary" title="Meer kennisbank artikelen">Ga naar de kennisbank</a>
    </div>
</section>

<?php get_footer(); ?>