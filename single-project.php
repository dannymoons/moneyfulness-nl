<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$image = get_field('project_featured_img_field');
$title = get_the_title();
$terms = get_the_terms($post->ID, 'project-category');
$currentID = get_the_ID();

$query_args = [
    'post_type' => 'project',
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

            <?php

            moonsio_image($image, 'content_regular', [
                'class' => 'single-post__featured',
            ]);

            ?>
            <div class="single-post__meta">

                <?php if ($terms) : ?>
                    <?php foreach ($terms as $term) : ?>
                        <a href="<?= get_term_link($term); ?>" class="single-post__meta-item">
                            <?= $term->name; ?>
                        </a>
                    <?php endforeach; ?>
                <? endif; ?>

            </div>

            <div class="single-post__header">
                <h1 class="single-post__title">
                    <?= $title; ?>
                </h1>
            </div>
            <div class="single-post__body">

                <?= the_content(); ?>
            </div>
        </div>

        <div class="single-post__sidebar sidebar">
            <div class="sidebar__widget sidebar__widget--contact">
                <p class="sidebar__title">Vraag een offerte aan</p>
                <?php gravity_form(13, false, false, false, '', true,); ?>
                <p>Of <a href="/contact/" class="link" title="Stel je vraag">stel ons je vraag</a>.</p>
            </div>

        </div>
    </div>
</section>
<section class="section section--wide">
    <div class="section__container">
        <div class="section__header">
            <h2 class="heading-2">Meer recente projecten</h2>
        </div>
        <div class="grid grid--444">
            <?php

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    get_template_part('templates/component/component', 'post-card', [
                        'style' => 'card--overlay'
                    ]);
                }
                wp_reset_postdata();
            }

            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>