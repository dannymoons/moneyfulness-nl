<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('stepper_vertical_title');
$duoheading = get_field('stepper_vertical_enable_duo_heading');
$title_pre = get_field('stepper_vertical_title_pre');
$title_main = get_field('stepper_vertical_title_main');
$title_after = get_field('stepper_vertical_title_after');

$content = get_field('stepper_vertical_content');
// $image = get_field('stepper_image');
$buttons = get_field('stepper_vertical_buttons');
$steps = get_field('stepper_vertical_steps');
$bg_color = get_field('stepper_vertical_bg_color');
$spacing = get_field('stepper_verical_spacing');
$mirror_content = get_field('stepper_verical_mirror');
$align_text = get_field('stepper_verical_align_text');
$align_self = get_field('stepper_verical_align_self');

if ($mirror_content === true) {
	$mirror = 'grid--mirror';
}

?>

<section class="section <?= $spacing; ?> <?= $bg_color; ?>">
	<div class="section__container">
		<div class="grid grid--66 <?= $mirror; ?> ">
			<div class="grid__col-1 <?= $align_self; ?> <?= $align_text; ?>">

				<?php if ($duoheading === false) : ?>
					<h2 class="heading-2">
						<?= $title; ?>
					</h2>
				<?php endif; ?>

				<?php if ($duoheading === true) : ?>
					<h2 class="heading-2"><?= $title_pre; ?> <span class="duoheading"><?= $title_main; ?></span> <?= $title_after; ?></h2>
				<?php endif; ?>

				<?= $content; ?>

				<?php

				if ($buttons) :

					foreach ($buttons as $button) :

				?>

						<?php
						if ($buttons) {
							foreach ($buttons as $button) {
								get_template_part('templates/component/component', 'button', ['button' => $button]);
							}
						}
						?>

				<?php endforeach;

				endif; ?>

			</div>
			<div class="grid__col-2">
				<div class="steps">

					<?php if ($steps) {
						foreach ($steps as $key => $step) {
							get_template_part('templates/component/component', 'step', [
								'step' => $step,
								'number' => $key + 1,
							]);
						}
					}
					?>

				</div>
			</div>
		</div>
	</div>
</section>