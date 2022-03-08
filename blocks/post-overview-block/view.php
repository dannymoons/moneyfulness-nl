<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('posts_title');
$text = get_field('posts_text');
$show_text = get_field('show_posts_text');
$title_format = get_field('posts_title_format');
$post_count = get_field('posts_count');
$posts = get_field('posts_posts');
$layout = get_field('posts_layout');
$bg_color = get_field('posts_bg_color');
$align_self = get_field('posts_content_align_self');
$post_type = get_field('posts_type');
$order_by = get_field('posts_order_by');
$post_order = get_field('posts_order');
$style = get_field('posts_style');
$buttons = get_field('posts_buttons');
$post_offset = get_field('posts_offset');

$query_args = [
	'post_type' => [$post_type],
	'post_status' => 'publish',
	'posts_per_page' => $post_count,
	// 'showposts'     => 4,
	// 'post_count' => $post_count,
	'offset' => $post_offset,
	'orderby' => [$order_by => $post_order],
];

if ($posts) {
	$query_args['post__in'] = $posts;
}

$query = new WP_Query($query_args);

?>

<?php if ($layout === 'layout_1') : ?>

	<section class="section <?= $bg_color; ?> section--wide">
		<div class="section__container">
			<div class="section__header">

				<?php if ($title) : ?>

					<?php if ($title_format === 'page') : ?>

						<h1 class="heading-1">
							<?= $title; ?>
						</h1>

					<?php endif; ?>


					<?php if ($title_format === 'section') : ?>

						<h2 class="heading-2">
							<?= $title; ?>
						</h2>

					<?php endif; ?>

					<?php if ($show_text === true) : ?>

						<?= $text; ?>

					<?php endif; ?>

				<?php endif; ?>

			</div>

			<div class="grid grid--444">
				<?php

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();

						get_template_part('templates/component/component', 'post-card', [
							'style' => $style,
						]);
					}
					wp_reset_postdata();
				}

				?>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($layout === 'layout_2') : ?>
	<section class="section <?= $bg_color; ?> section--wide">
		<div class="section__container">

			<div class="post-overview">
				<div class="post-overview__content <?= $align_self; ?>">
					<?php if ($title_format === 'page') : ?>

						<h1 class="heading-1">
							<?= $title; ?>
						</h1>

					<?php endif; ?>


					<?php if ($title_format === 'section') : ?>

						<h2 class="heading-2">
							<?= $title; ?>
						</h2>

					<?php endif; ?>

					<?php if ($show_text === true) : ?>

						<?= $text; ?>

					<?php endif; ?>

					<?php
					if ($buttons) {
						foreach ($buttons as $button) {
							get_template_part('templates/component/component', 'button', ['button' => $button]);
						}
					}
					?>

				</div>

				<div class="post-overview__posts">
					<?php

					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();

							get_template_part('templates/component/component', 'post-card', [
								'style' => $style,
							]);
						}
						wp_reset_postdata();
					}

					?>
				</div>

			</div>
		</div>
	</section>

<?php endif; ?>