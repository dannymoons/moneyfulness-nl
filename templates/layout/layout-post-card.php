<?php defined('ABSPATH') || exit('Forbidden');

[
    'image' => $image,
    'style' => $style,
    'intro' => $intro,
    'post_tpe' => $post_type,

] = $args;

$title = get_the_title();
$title_short = strlen($title) > 50 ? substr($title, 0, 45) . "..." : $title;

?>



<div class="card <?= $style; ?>">
    <div class="card__img-container">

        <?php
        moonsio_image($image, 'card', [
            'class' => 'card__img',
        ]);
        ?>

        <?php if ($style === 'card--overlay') : ?>

            <div class="card__overlay"></div>

        <?php endif; ?>

        <?php if ($post_type === 'blog') : ?>

            <span class="card__date">
                <?php echo get_the_date($format = 'd M. Y'); ?>
            </span>

        <?php endif; ?>

    </div>


    <div class="card__body">
        <a href="<?php echo get_permalink(); ?>" class="card__title" title="<?php echo get_the_title(); ?>"><?php echo $title_short; ?></a>
        <div class="card__text">

            <?php if ($intro) : ?>
                <p><?php echo substr($intro, 0, 75); ?>...</p>
            <? endif; ?>

        </div>
        <div class="card__buttons">
            <a href="<?php echo get_permalink(); ?>" class="btn btn--primary card__btn" title="<?php echo get_the_title(); ?>">Lees meer</a>
        </div>
    </div>
</div>