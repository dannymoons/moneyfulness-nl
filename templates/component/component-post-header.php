<?php defined('ABSPATH') || exit('Forbidden');

global $post;
$image = get_field('blog_featured_img_field');
$title = get_the_title();
$query_args = [
	'post_type' => 'blog',
	'post_status' => 'publish',
	// 'posts_per_page' => $post_count,
	'posts_per_page' => '5',
	// 'orderby' => [$order_by => $post_order],
];
$query = new WP_Query($query_args);

?>

<section class="single-post single-post--simple">
	<div class="single-post__container">
		<div class="single-post__content">
			<?php

			moonsio_image($image, 'content_regular', [
				'class' => 'single-post__featured',
			]);

			?>

			<div class="single-post__body">
				<h1 class="single-post__title">
					<?php echo $title; ?>
				</h1>
				<?php echo get_the_content(); ?>
			</div>
		</div>

		<div class="single-post__sidebar">
			<div class="cta-box">
				<p>hallo</p>
			</div>
			<div class="recent-posts">
				<?php

				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();

						if ($post_type === 'blog') {
							get_template_part('templates/component/component', 'post-recent-h');
						}
					}
					wp_reset_postdata();
				}
				?>
			</div>
		</div>
	</div>
</section>