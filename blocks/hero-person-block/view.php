<?php defined('ABSPATH') || exit('Forbidden');

$buttons = get_field('hero_person_buttons');
$bg_color = get_field('hero_person_bg_color');
$mirror_content = get_field('hero_person_mirror');
$title = get_field('hero_person_title');
$duoheading = get_field('hero_person_enable_duo_heading');
$title_pre = get_field('hero_person_title_pre');
$title_main = get_field('hero_person_title_main');
$title_after = get_field('hero_person_title_after');
$content = get_field('hero_person_intro');
$image =  get_field('hero_person_image');
$image_as_bg = get_field('hero_person_as_bg');
$hero_height = get_field('hero_person_height');

if ($mirror_content === true) {
	$mirror = 'grid--mirror';
}

?>

<div class="hero hero--person">
	<div class="hero__container">
		<div class="hero__content">
			<h1 class="heading-1">
				<?= $title; ?>
			</h1>

			<?= $content; ?>

			<?php if ($buttons) : ?>

				<?php foreach ($buttons as $button) {
					get_template_part('templates/component/component', 'button', ['button' => $button]);
				}

				?>

			<?php endif; ?>

		</div>

		<div class="hero__image">
			<?php

			moonsio_image($image, 'content_regular', [
				'class' => 'hero__img',
			]);

			?>

			<a class="hero__blurb hero__blurb--1" href="/spreker/">
				<svg class="hero__blurbicon">
					<use href="#i-mic"></use>
				</svg>
			</a>

			<a class="hero__blurb hero__blurb--2" href="/evenementen/">
				<svg class="hero__blurbicon">
					<use href="#i-cal-2"></use>
				</svg>
			</a>

			<a class="hero__blurb hero__blurb--3" href="/trainingen/">
				<svg class="hero__blurbicon">
					<use href="#i-award"></use>
				</svg>
			</a>
		</div>
	</div>
</div>