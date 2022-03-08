<?php defined('ABSPATH') || exit('Forbidden');

[
	'counter' => $counter,
	'style' => $style,
] = $args;

?>

<div class="counter">

	<?php if ($counter['icon']) {

		moonsio_image($counter['icon'], 'content_regular', [
			'class' => 'counter__icon',
		]);
	}

	?>

	<p class="counter__number" data-animate="counter">
		<?= $counter['number']; ?>
	</p>
	<p class="counter__label">
		<?= $counter['label']; ?>
	</p>
</div>