<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('popup_form_title');
$text = get_field('popup_form_text');
$image = get_field('popup_form_image');
$form_id = get_field('popup_form_form_id');

?>

<section class="text-center">
	<p class="popup__title">
		<?= $title; ?>
	</p>
	<div class="popup__text">
		<?= $text; ?>
	</div>

	<?php get_template_part('templates/component/component', 'form-contact');
	?>
</section>