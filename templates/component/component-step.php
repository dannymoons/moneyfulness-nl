<?php defined('ABSPATH') || exit('Forbidden');

[
	'step' => $step,
	'number' => $number,
] = $args;

?>

<div class="step step--vertical">
	<span class="step__number">
		<?= $number; ?>
	</span>
	<div class="step__body">
		<p class="step__title">
			<?= $step['title']; ?>
		</p>
		<div class="step__text">
			<?= $step['text']; ?>
		</div>
	</div>
</div>