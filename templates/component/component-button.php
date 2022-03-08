<?php defined('ABSPATH') || exit('Forbidden');

$button = $args['button'];
$open_popup = $button['popup'];
$title = get_the_title($button['data_popup']);
$data_popup = str_replace(' ', '-', strtolower($title));


?>

<?php if ($open_popup === true) : ?>

	<a class="btn <?= $button['style']; ?>" data-popup-toggle="<?= $data_popup; ?>" title="<?= $button['button_text']; ?>">

		<?= $button['button_text']; ?>

	</a>

<?php else : ?>

	<?php if ($button['link']) : ?>

		<a class="btn <?= $button['style']; ?>" href="<?= $button['link']['url']; ?>" title="<?= $button['link']['title']; ?>">

			<?= $button['link']['title']; ?>

		</a>

	<?php endif; ?>

<?php endif; ?>