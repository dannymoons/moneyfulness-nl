<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('youtube_overview_title');
$text = get_field('youtube_overview_text');
$show_text = get_field('show_youtube_overview_text');
$title_format = get_field('youtube_overview_title_format');
$post_count = get_field('youtube_overview_count');
$videos = get_field('youtube_overview_videos');
$layout = get_field('youtube_overview_layout');
$bg_color = get_field('youtube_overview_bg_color');
// $align_self = get_field('youtube_overview_content_align_self');
$order_by = get_field('youtube_overview_order_by');
$post_order = get_field('youtube_overview_order');
$style = get_field('youtube_overview_style');
// $buttons = get_field('youtube_overview_buttons');
$post_offset = get_field('youtube_overview_offset');

$query_args = [
	'post_type' => ['video'],
	'post_status' => 'publish',
	'posts_per_page' => $post_count,
	// 'showposts'     => 4,
	// 'post_count' => $post_count,
	'offset' => $post_offset,
	'orderby' => [$order_by => $post_order],
];

if ($videos) {
	$query_args['post__in'] = $videos;
}

$query = new WP_Query($query_args);

?>

<section class="section section--wide <?= $bg_color; ?>">
	<script defer src="https://apis.google.com/js/platform.js"></script>


	<div class="section__container">
		<div class="section__header">

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
			<div class="youtube-subscribe">
				<div class="g-ytsubscribe" data-channelid="UCVPi6uZuvrIe614wkmcMXPg" data-layout="default" data-count="default"></div>
			</div>

		</div>
		<div class="grid grid--444">
			<?php

			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();

					get_template_part('templates/component/component', 'youtube-video', [
						// 'video_id' => $video_id,
					]);
				}
				wp_reset_postdata();
			}

			?>
		</div>
	</div>
</section>