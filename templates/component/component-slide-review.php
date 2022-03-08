<?php defined('ABSPATH') || exit('Forbidden');

[
	'style' => $style,
	// 'price' => $price,
] = $args;


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
	<div class="review">
		<div class="review__container">
			<p class="review__title">
				<?= $review_title; ?>
			</p>
			<p class="review__text">
				<?= $text; ?>
			</p>
		</div>

		<p class="review__author"><?= $author; ?></p>
	</div>


</div>