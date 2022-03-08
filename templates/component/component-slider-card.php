<?php defined('ABSPATH') || exit('Forbidden');

// $card = $args['slider_card'];

[
	'slider_card' => $card,
	'style' => $style,
] = $args;


?>

<div class="slider__slide swiper-slide">
	<div class="card <?php echo $style; ?>">
		<div class="card__img-container">
			<?php
			moonsio_image($card['card_image'], 'card', [
				'class' => 'card__img',
				'alt' => 'image'
			]);
			?>
		</div>

		<?php if ($style === 'card--overlay') : ?>

			<div class="card__overlay"></div>

		<?php endif; ?>

		<div class="card__body">

			<?php if ($card['link']) : ?>

				<a href="<?php echo $card['link']['url']; ?>" class="card__title" target="<?php echo $card['link']['target']; ?>" title="<?php echo $card['card_title']; ?>"><?php echo $card['card_title']; ?></a>

			<?php else : ?>

				<p class="card__title"><?php echo $card['card_title']; ?></p>

			<?php endif; ?>

			<div class="card__text">

				<p><?php echo $card['card_text']; ?></p>

			</div>

			<?php if ($card['link']) : ?>

				<a href="<?php echo $card['link']['url']; ?>" class="btn btn--primary card__btn" target="<?php echo $card['link']['target']; ?>" title="<?php echo $card['card_title']; ?>">
					<?php echo $card['link']['title']; ?>
				</a>

			<?php endif; ?>

		</div>
	</div>
</div>