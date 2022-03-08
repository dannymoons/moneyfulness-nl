<?php defined('ABSPATH') || exit('Forbidden');


// manier 1 van args uit de view pakken
[
	'style' => $style,
	// 'price' => $price,
] = $args;

// manier 2 van args uit de view pakken

// $style = $args['style'];
// $price = $args['price'];


$ID = get_the_ID();
$author = get_field('review_author_field', $ID);
$image = get_field('review_image_field', $ID);
$company = get_field('review_company_field', $ID);
$function = get_field('review_function_field', $ID);
$review_title = get_field('review_title_field', $ID);
$text = get_field('review_text_field', $ID);
$stars = get_field('review_stars_field', $ID);

?>

<div class="slider__slide slider swiper-slide">
	<?php if ($style === 'style_1') : ?>
		<div class="testi testi--1">
			<div class="testi__container">
				<p class="testi__text">
					<?= $text; ?>
				</p>
			</div>

			<p class="testi__author"><?= $author; ?></p>
		</div>

	<?php endif; ?>

	<?php if ($style === 'style_2') : ?>
		<div class="testi testi--2">
			<div class="testi__container">
				<div class="testi__header">
					<div class="testi__person">
						<p class="testi__author"><?= $author; ?></p>
						<p class="testi__company"><?= $company; ?></p>
					</div>
				</div>
				<p class="testi__text">
					<?= $text; ?>
				</p>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($style === 'style_3') : ?>

		<div class="testi testi--3">
			<div class="testi__container">
				<p class="testi__title">
					<?= $review_title; ?>
				</p>
				<p class="testi__text">
					<?= $text; ?>
				</p>

				<div class="testi__person">
					<p class="testi__author">
						<?= $author; ?>
					</p>

				</div>

			</div>
		</div>

	<?php endif; ?>

</div>