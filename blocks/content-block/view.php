<?php defined('ABSPATH') || exit('Forbidden');

$buttons = get_field('content_block_buttons');
$section_bg_color = get_field('content_block_bg_color');
// $section_class = 'section section--content section--wide';
$mirror_content = get_field('content_block_mirror');
// $show_title = get_field('content_block_show_title');
$title = get_field('content_block_title');
$duoheading = get_field('content_block_enable_duo_heading');
$title_pre = get_field('content_block_title_pre');
$title_main = get_field('content_block_title_main');
$title_after = get_field('content_block_title_after');
$text_size = get_field('content_block_text_size');
$content = get_field('content_block_intro');
$image =  get_field('content_block_image');
$hide_image = get_field('content_block_hide_img');
// $spacing = get_field('content_block_spacing');
$padding_top = get_field('content_block_padding_top');
$padding_bottom = get_field('content_block_padding_bottom');
$align_text = get_field('content_block_align_text');
$align_self = get_field('content_block_align_self');
$boxed_toggle = get_field('content_block_boxed_toggle');
$box_bg = get_field('content_block_boxed_bg');
$content_width = get_field('content_block_width');

if ($mirror_content === true) {
	$mirror = 'grid--mirror';
	$overlay_effect = 'slide-out-right';
} else {
	$overlay_effect = 'slide-out-left';
}

if ($boxed_toggle === true) {
	$grid_boxed = 'grid--boxed';
}


if ($hide_image === false) {
	$grid_template = 'grid--66';
}
?>

<section class="section <?= $padding_top; ?> <?= $padding_bottom; ?> <?= $section_bg_color; ?>">
	<div class="<?= $content_width; ?>">
		<div class="grid <?= $grid_template; ?> <?= $grid_boxed; ?> <?= $box_bg; ?> <?= $mirror; ?>">
			<div class="grid__col-1 <?= $align_self; ?> <?= $align_text; ?> <?= $text_size; ?>">

				<?php if ($title || $title_main) : ?>

					<?php if ($duoheading === false) : ?>

						<h2 class="heading-2">
							<?= $title; ?>
						</h2>

					<?php endif; ?>

					<?php if ($duoheading === true) : ?>

						<h2 class="heading-2"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h2>

					<?php endif; ?>

				<? endif; ?>

				<?= $content; ?>

				<?php
				if ($buttons) {
					foreach ($buttons as $button) {
						get_template_part('templates/component/component', 'button', [
							'button' => $button,
						]);
					}
				}
				?>

			</div>

			<?php if ($hide_image === false) : ?>

				<div class="grid__col-2">
					<div class="image-container">
						<?php

						moonsio_image($image, 'content_regular', [
							'class' => 'grid__img image',
							'data-aos' => 'zoom-out',
							'data-aos-duration' => '1800',
						]);

						?>
						<div class="image-container__overlay <?= $section_bg_color; ?>" data-aos="<?= $overlay_effect; ?>"></div>


					</div>




				</div>

			<?php endif; ?>

		</div>

	</div>
</section>