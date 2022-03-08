<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$ID = get_the_ID();
$style = get_field('posts_style');
$intro = get_field('knowledge_center_intro_text_field', $ID);
$image = get_field('knowledge_center_featured_img_field', $ID);

?>

<div class="card <?php echo $style; ?>">
    <div class="card__img-container">

        <?php
        moonsio_image($image, 'card', [
            'class' => 'card__img',
        ]);
        ?>

        <?php if ($style === 'card--overlay') : ?>

            <div class="card__overlay"></div>

        <?php endif; ?>

        <span class="card__date">
            <?php echo get_the_date($format = 'd M. Y'); ?>
        </span>
    </div>


    <div class="card__body">
        <a href="<?php echo get_permalink(); ?>" class="card__title" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
        <div class="card__text">
            <p><?php echo substr($intro, 0, 75); ?>...</p>
        </div>
        <div class="card__buttons">
            <a href="<?php echo get_permalink(); ?>" class="btn btn--primary card__btn" title="<?php echo get_the_title(); ?>">Lees meer</a>
        </div>

        <!-- <p><?php echo wp_get_post_categories($ID); ?></p> -->

    </div>
</div>