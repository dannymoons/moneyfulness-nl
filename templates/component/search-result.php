<?php defined('ABSPATH') || exit('Forbidden');

//
$image_fields = [
	'blog' => 'blog_featured_img',
	'kennisbank' => 'post_featured_img',
	'product' => '',
	'project' => '',
	'review' => 'review_image',
];

//
$search_result = $args['search_result'];

$result_post_id = $search_result['id'];
$result_post_title = $search_result['title'];
$result_post_link = $search_result['url'];

$result_post_type = get_post_type($result_post_id);
$result_post_image = get_field($image_fields[$result_post_type], $result_post_id);

?>

<section style="width:50%;margin:auto;">
	<div class="card card--h">
		<div class="card__img-container">
			<?php 
				moonsio_image($result_post_image, 'content_regular', [
					'class' => 'card__img',
				]);
			?>
		</div>
		<div class="card__body">
			<a href="<?php echo $result_post_link; ?>" class="card__title"><?php echo $result_post_title; ?></a>
			<a href="<?php echo $result_post_link; ?>" class="card__link" title="<?php echo $result_post_title; ?>">Lees meer</a>
		</div>
	</div>
</section>
