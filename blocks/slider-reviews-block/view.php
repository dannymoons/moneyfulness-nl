<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('reviews_slider_title');
// $show_title = get_field('reviews_slider_title_show');
$post_count = get_field('reviews_slider_count');
$posts = get_field('reviews_slider_posts');
// $slides_tablet = get_field('reviews_slider_slides_tablet');
// $slides_pc = get_field('reviews_slider_slides_pc');
$style = get_field('reviews_slider_style'); // wordt doorgestuurd naar de component
$bg_color = get_field('reviews_slider_bg_color');
// $order_by = get_field('reviews_slider_order_by');
// $post_order = get_field('reviews_slider_order');
// $spacing = get_field('reviews_slider_spacing');
$padding_top  = get_field('reviews_slider_padding_top');
$padding_bottom  = get_field('reviews_slider_padding_bottom');

// $arrows = get_field('testomonials_slider_arrows');

$query_args = [
	'post_type' => ['review'],
	'post_status' => 'publish',
	'posts_per_page' => '-1',
	// 'orderby' => [$order_by => $post_order],
];

if ($posts) {
	$query_args['post__in'] = $posts;
}

$query = new WP_Query($query_args);

$swiperOptions = [
	'slidesPerView' => "auto",
	'spaceBetween' => 0,
	'effect' => "cards",
	'loop' => true,
	'speed' => 1200,
	'autoplay' => [
		'delay' => 4000,
	],
];

$swiperOptionsJSON = rawurlencode(json_encode($swiperOptions));

?>

<section class="section <?= $bg_color; ?> <?= $padding_top; ?> <?= $padding_bottom; ?>">
	<div class="section__container">

		<?php if ($title) : ?>

			<div class="section__header text-center">
				<h2 class="heading-2"><?= $title; ?></h2>
			</div>

		<?php endif; ?>

		<div class="grid">
			<div class="swiper slider slider--reviews" data-swiper="<?= $swiperOptionsJSON; ?>">
				<div class="slider__wrapper swiper-wrapper">

					<?php

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							get_template_part('templates/component/component', 'slide-review', [
								// 'style' => $style,
							]);
						}
						wp_reset_postdata();
					}

					?>

				</div>
				<div class="slider__button slider__button--prev">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
						<path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z" />
					</svg>
				</div>
				<div class="slider__button slider__button--next">
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="slider__navicon" viewBox="0 0 16 16">
						<path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z" />
					</svg>
				</div>
			</div>
		</div>

	</div>
</section>