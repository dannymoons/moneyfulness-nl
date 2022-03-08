<?php defined('ABSPATH') || exit('Forbidden');

// $button = $args['posts_button'];
// $card = $args['card'];

// [
// 	'popup' => $card['link'],
// ] = $button;

// var_dump($card['popup']);

[
	'card' => $card,
	'card_style' => $card_style,
	'show_image' => $show_image,
] = $args;

// var_dump($button);

$button = [
	'link' => $card['link'],
	'popup' => $card['popup'],
	'button_text' => $card['button_text'],
	'data_popup' => $card['data_popup'],
	'style' => 'btn--primary card__btn',
];

?>

<div class="card <?= $card_style; ?>">

	<?php if ($show_image === true) : ?>

		<div class="card__img-container">

			<?php moonsio_image($card['card_image'], 'card', [
				'class' => 'card__img',
				'alt' => ''
			]);

			?>

		</div>

	<? endif; ?>

	<?php if ($card_style === 'card--overlay') : ?>

		<div class="card__overlay"></div>

	<?php endif; ?>

	<div class="card__body">

		<?php if ($card['link']) : ?>

			<a href="<?= $card['link']['url']; ?>" class="card__title" target="<?= $card['link']['target']; ?>" title="<?= $card['card_title']; ?>"><?= $card['card_title']; ?></a>

		<?php else : ?>

			<p class="card__title"><?= $card['card_title']; ?></p>

		<?php endif; ?>

		<div class="card__text">

			<p><?= $card['card_text']; ?></p>

		</div>

		<?php get_template_part('templates/component/component', 'button', [
			'button' => $button,
		]);
		?>

		<!-- <?php if ($card['link']) : ?>

			<a href="<?= $card['link']['url']; ?>" class="btn btn--primary card__btn" target="<?= $card['link']['target']; ?>" title="<?= $card['card_title']; ?>">

				<?= $card['link']['title']; ?>

			</a>

		<?php endif; ?> -->

	</div>
</div>