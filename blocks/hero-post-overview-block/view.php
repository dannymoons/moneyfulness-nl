<?php defined('ABSPATH') || exit('Forbidden');

// $buttons = get_field('hero_post_search_buttons');
// $bg_color = get_field('hero_post_search_bg_color');
// $mirror_content = get_field('hero_post_search_mirror');
$title = get_field('hero_post_search_title');
$content = get_field('hero_post_search_content');
$image =  get_field('hero_post_search_image');
// $image_as_bg = get_field('hero_post_search_as_bg');
// $hero_height = get_field('hero_post_search_height');

if ($mirror_content === true) {
	$mirror = 'grid--mirror';
}

?>
<div class="hero hero--post-overview">
	<?php
	moonsio_image($image, 'hero_bg_full', [
		'class' => 'hero__bg'
	]);
	?>
	<div class="hero__overlay"></div>
	<div class="hero__container">
		<div class="hero__content text-center">

			<h1 class="hero__title">
				<?= $title; ?>
			</h1>

			<?php if ($content) : ?>
				<div class="hero__text">
					<?= $content; ?>
				</div>

			<?php endif; ?>

			<?php get_template_part('templates/component/component', 'search'); ?>

		</div>
	</div>
</div>

<!-- <section class="section section--grey section--wide post-search">
	<div class="section__container section__container--xs text-center">
		<div class="section__header">
			<h1 class="heading-1"><?= $title; ?></h1>
			<?= $content; ?>
		</div>

		<?php get_template_part('templates/component/component', 'search'); ?>
	</div>
	</div>
</section> -->