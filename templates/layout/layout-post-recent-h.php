<?php defined('ABSPATH') || exit('Forbidden');
$image = get_field('blog_featured_img_field');
$title = get_the_title();
$card_title = strlen($title) > 45 ? substr($title, 0, 40) . "..." : $title;

?>


<div class="card card--h">
    <div class="card__img-container">
        <?php

        moonsio_image($image, 'content_regular', [
            'class' => 'card__img',
        ]);

        ?>
    </div>

    <div class="card__body">
        <a href="<?php echo get_permalink(); ?>" class="card__title"><?php echo $card_title; ?></a>
        <a href="<?php echo get_permalink(); ?>" class="card__link" title="<?php echo get_the_title(); ?>">Lees meer</a>
    </div>
</div>