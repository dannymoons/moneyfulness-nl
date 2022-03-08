<?php defined('ABSPATH') || exit('Forbidden');

$buttons = get_field('hero_gallery_img_buttons');
$bg_color = get_field('hero_gallery_img_bg_color');
$title = get_field('hero_gallery_img_title');
$content = get_field('hero_gallery_img_intro');
$images =  get_field('hero_gallery_imgages');
$duoheading = get_field('hero_gallery_enable_duo_heading');
$title_pre = get_field('hero_gallery_img_title_pre');
$title_main = get_field('hero_gallery_img_title_main');
$title_after = get_field('hero_gallery_img_title_after');
$mirror_content = get_field('hero_gallery_img_mirror');

if ($mirror_content === true) {
	$mirror = 'hero--gallery-mirror';
}


?>



<div class="hero hero--gallery <?= $bg_color; ?> <?= $mirror; ?>">
	<div class="hero__container">
		<div class="hero__content">

			<?php if ($duoheading === false) : ?>
				<h1 class="hero__title"><?= $title; ?></h1>
			<?php endif; ?>

			<?php if ($duoheading === true) : ?>
				<h1 class="hero__title"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h1>
			<?php endif; ?>

			<?= $content; ?>

			<?php if ($buttons) : ?>
				<div class="hero__btns">

					<?php foreach ($buttons as $button) {
						get_template_part('templates/component/component', 'button', ['button' => $button]);
					}

					?>
				</div>

			<?php endif; ?>
		</div>
		<div class="hero__gallery">
			<?php

			foreach ($images as $key => $image) {
				moonsio_image($image, 'content_regular', [
					'class' => sprintf('hero__img hero__img--%s', $key + 1),
				]);
			}

			?>

		</div>
	</div>
</div>