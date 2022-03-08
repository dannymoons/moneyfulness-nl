<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('testimonials_title');
$post_count = get_field('testimonials_count');
$posts = get_field('testimonials_posts');
$style = get_field('testimonials_style');
$bg_color = get_field('testimonials_bg_color');
$order_by = get_field('testimonials_order_by');
$post_order = get_field('testimonials_order');
$padding_top = get_field('testimonials_padding_top');
$padding_bottom = get_field('testimonials_padding_bottom');


$query_args = [
	'post_type' => ['review'],
	'post_status' => 'publish',
	'posts_per_page' => $post_count,
	'orderby' => [$order_by => $post_order],
];

if ($posts) {
	$query_args['post__in'] = $posts;
}

$query = new WP_Query($query_args);

?>

<section class="section <?= $padding_top; ?> <?= $padding_bottom; ?> <?= $bg_color; ?>">
	<div class="section__container">

		<?php if ($title) : ?>

			<div class="section__header">
				<h2 class="heading-2 text-center">
					<?= $title; ?>
				</h2>
			</div>

		<?php endif; ?>

		<div class="grid grid--444">
			<?php

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();
					get_template_part('templates/component/component', 'testimonial-1', [
						'style' => $style,
					]);
				}
				wp_reset_postdata();
			}

			?>
		</div>
	</div>
</section>