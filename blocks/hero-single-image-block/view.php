<?php defined('ABSPATH') || exit('Forbidden');

$buttons = get_field('hero_single_img_buttons');
$bg_color = get_field('hero_single_img_bg_color');
$mirror_content = get_field('hero_single_img_mirror');
$title = get_field('hero_single_img_title');
$duoheading = get_field('content_block_enable_duo_heading');
$title_pre = get_field('content_block_title_pre');
$title_main = get_field('content_block_title_main');
$title_after = get_field('content_block_title_after');
$content = get_field('hero_single_img_intro');
$image =  get_field('hero_single_img_image');
$image_as_bg = get_field('hero_single_img_as_bg');
$hero_height = get_field('hero_single_img_height');

if ($mirror_content === true) {
	$mirror = 'grid--mirror';
	$overlay_effect = 'slide-out-right';
} else {
	$overlay_effect = 'slide-out-left';
}

?>

<?php if ($image_as_bg === false) : ?>
	<section class="section section--wide <?= $bg_color; ?>">
		<div class="section__container">
			<div class="grid grid--66 <?= $mirror; ?>">
				<div class="grid__col-1">

					<?php if ($duoheading === false) : ?>
						<h1 class="heading-1">
							<?= $title; ?>
						</h1>
					<?php endif; ?>

					<?php if ($duoheading === true) : ?>
						<h1 class="heading-1"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h1>
					<?php endif; ?>


					<?= $content; ?>

					<?php if ($buttons) : ?>

						<?php foreach ($buttons as $button) {
							get_template_part('templates/component/component', 'button', ['button' => $button]);
						}

						?>

					<?php endif; ?>
				</div>
				<div class="grid__col-2">

					<div class="image-container">
						<?php

						moonsio_image($image, 'content_regular', [
							'class' => 'grid__img',
							'data-aos' => 'zoom-out',
							'data-aos-duration' => '1800',
						]);

						?>
						<div class="image-container__overlay <?= $bg_color; ?>" data-aos="<?= $overlay_effect; ?>"></div>


					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ($image_as_bg === true) : ?>
	<div class="hero hero--2 <?= $hero_height; ?>">
		<?php
		moonsio_image($image, 'hero_bg_full', [
			'class' => 'hero__bg'
		]);
		?>
		<div class="hero__overlay"></div>
		<div class="hero__container">
			<div class="hero__content">

				<?php if ($duoheading === false) : ?>
					<h1 class="hero__title">
						<?= $title; ?>
					</h1>
				<?php endif; ?>

				<?php if ($duoheading === true) : ?>
					<h1 class="hero__title"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h1>
				<?php endif; ?>

				<?php if ($content) : ?>
					<div class="hero__text">
						<?= $content; ?>
					</div>
				<?php endif; ?>

				<?php if ($buttons) : ?>

					<div class="hero__btns">

						<?php if ($buttons) : ?>

							<?php foreach ($buttons as $button) {
								get_template_part('templates/component/component', 'button', ['button' => $button]);
							}

							?>

						<?php endif; ?>

					</div>

				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>