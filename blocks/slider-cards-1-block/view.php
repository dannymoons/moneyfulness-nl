<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('slider_cards_title');
$duoheading = get_field('slider_cards_enable_duo_heading');
$title_pre = get_field('slider_cards_title_pre');
$title_main = get_field('slider_cards_title_main');
$title_after = get_field('slider_cards_title_after');
$text = get_field('slider_cards_text');
$cards = get_field('slider_cards_repeater');
$bg_style = get_field('slider_cards_1_bg_style');
$bg_color = get_field('slider_cards_1_bg_color');
$buttons = get_field('slider_cards_1_buttons');
$layout = get_field('slider_cards_layout');
$style = get_field('slider_cards_style');


if ($layout === 'slider_side') {
	$swiperOptions = [
		'slidesPerView' => 1.4,
		'spaceBetween' => 20,
		'loop' => true,
		'speed' => 500,
		'autoplay' => [
			'delay' => 3000,
		],
		'breakpoints' => [
			'600' => [
				'slidesPerView' => 2.2,
			],
			'768' => [
				'slidesPerView' => 1.4,
			],
			'981' => [
				'slidesPerView' => 2.6,
			],
		],
	];
}

if ($layout === 'slider_below') {
	$swiperOptions = [
		'slidesPerView' => 1.4,
		'spaceBetween' => 20,
		'loop' => true,
		'speed' => 500,
		'autoplay' => [
			'delay' => 3000,
		],
		'breakpoints' => [
			'600' => [
				'slidesPerView' => 2.2,
			],
			'768' => [
				'slidesPerView' => 1.4,
			],
			'981' => [
				'slidesPerView' => 3,
			],
			'1200' => [
				'slidesPerView' => 4,
			]
		],
	];
}

$swiperOptionsJSON = rawurlencode(json_encode($swiperOptions));

?>

<?php if ($layout === 'slider_side') : ?>
	<section class="section">
		<div class="section__container">
			<div class="slider-cards-bg <?= $bg_color; ?>"></div>
			<div class="grid grid--slider-cards">
				<div class="grid__col-1">
					<?php if ($duoheading === false) : ?>
						<h2 class="heading-2">
							<?= $title; ?>
						</h2>
					<?php endif; ?>

					<?php if ($duoheading === true) : ?>
						<h2 class="heading-2"><?= $title_pre; ?><span class="duoheading"><?= $title_main; ?></span><?= $title_after; ?></h2>
					<?php endif; ?>

					<?= $text ?>

					<?php

					if ($buttons) {

						foreach ($buttons as $button) {
							get_template_part('templates/component/component', 'button', ['button' => $button]);
						}
					}
					?>

				</div>
				<div class="grid__col-2">
					<div class="swiper slider slider--services" data-swiper="<?= $swiperOptionsJSON; ?>">
						<div class="slider__wrapper swiper-wrapper">

							<?php
							foreach ($cards as $card) {
								get_template_part(
									'templates/component/component',
									'slider-card',
									[
										'slider_card' => $card,
										'style' => $style,
									]
								);
							}
							?>

						</div>
						<div class="slider__navigation">
							<div class="slider__button slider__button--prev">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
								</svg>
							</div>
							<div class="slider__button slider__button--next">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>

<?php if ($layout === 'slider_below') : ?>
	<section class="section section--wide">
		<div class="section__container">
			<div class="section__header">
				<?php if ($duoheading === false) : ?>
					<h2 class="heading-2">
						<?= $title; ?>
					</h2>
				<?php endif; ?>

				<?php if ($duoheading === true) : ?>
					<h2 class="heading-2"><?= $title_pre; ?><span class="duoheading"><?= $title_main; ?></span><?= $title_after; ?></h2>
				<?php endif; ?>


				<?= $text ?>

				<?php

				if ($buttons) {

					foreach ($buttons as $button) {
						get_template_part('templates/component/component', 'button', ['button' => $button]);
					}
				}
				?>
			</div>

			<div class="grid">
				<div class="grid__col-1">
					<div class="swiper slider slider--services" data-swiper="<?= $swiperOptionsJSON; ?>">
						<div class="slider__wrapper swiper-wrapper">

							<?php
							foreach ($cards as $card) {
								get_template_part(
									'templates/component/component',
									'slider-card',
									[
										'slider_card' => $card,
										'style' => $style,
									]
								);
							}
							?>

						</div>
						<div class="slider__navigation">
							<div class="slider__button slider__button--prev">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
								</svg>
							</div>
							<div class="slider__button slider__button--next">
								<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<? endif; ?>