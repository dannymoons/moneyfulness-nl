<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('banner_1_title');
$text = get_field('banner_1_text');
$buttons = get_field('banner_1_buttons');
$image = get_field('banner_1_bg');
$banner_align = get_field('banner_1_align');
$banner_width = get_field('banner_1_width');

?>

<section class="banner <?= $banner_width; ?> <?= $banner_align; ?>">
    <div class="banner__bg-container">
        <?php
        moonsio_image($image, 'hero_bg_full', [
            'class' => 'banner__bg',
            'alt' => $banner_title,
        ]);
        ?>
    </div>

    <div class="banner__overlay banner__overlay--dark"></div>
    <div class="banner__container">
        <div class="banner__content">

            <?php if ($title) : ?>

                <h2 class="banner__title"><?= $title; ?></h2>

            <?php endif; ?>

            <?php if ($text) : ?>

                <div class="banner__text">
                    <?= $text; ?>
                </div>

            <?php endif; ?>

            <?php
            if ($buttons) {
                foreach ($buttons as $button) {
                    get_template_part('templates/component/component', 'button', ['button' => $button]);
                }
            }
            ?>

        </div>
</section>