<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('readmore_title');
$duoheading = get_field('readmore_enable_duo_heading');
$title_pre = get_field('readmore_title_pre');
$title_main = get_field('readmore_title_main');
$title_after = get_field('readmore_title_after');
$text = get_field('readmore_text');
$image =  get_field('readmore_image');
$image_bg = get_field('readmore_img_bg');
$spacing = get_field('readmore_spacing');
$boxed_toggle = get_field('readmore_boxed_toggle');
$box_bg = get_field('readmore_boxed_bg');
$bg_color = get_field('readmore_bg_color');

if ($boxed_toggle === true) {
    $boxed = 'readmore--boxed';
}

?>

<div class="readmore <?= $bg_color; ?> <?= $boxed; ?> <?= $spacing; ?>">

    <?php if ($image_bg === true) : ?>

        <?php
        moonsio_image($image, 'hero_bg_full', [
            'class' => 'readmore__bg',
        ]);
        ?>

        <div class="readmore__overlay"></div>


    <?php endif; ?>

    <div class="readmore__container">

        <?php if ($duoheading === false) : ?>
            <h2 class="readmore__title heading-2">
                <?= $title; ?>
            </h2>
        <?php endif; ?>

        <?php if ($duoheading === true) : ?>
            <h2 class="readmore__title heading-2"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h2>
        <?php endif; ?>

        <div class="readmore__text">
            <?= $text; ?>
        </div>

        <div class="readmore__icontainer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="readmore__icon icon" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
            </svg>
        </div>

    </div>
</div>