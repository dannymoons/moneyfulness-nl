<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('faq_block_title');
$faqs = get_field('faq_block_repeater');
// $card_style = get_field('faq_block_style');
$bg_color = get_field('faq_block_bg_color');
// $spacing = get_field('faq_block_spacing');
$padding_top = get_field('faq_block_padding_top');
$padding_bottom = get_field('faq_block_padding_bottom');



?>

<section class="section <?= $bg_color; ?> section--light-green <?= $padding_top; ?> <?= $padding_bottom; ?>">
	<div class="section__container">

		<?php if ($title) : ?>

			<div class="section__header">
				<h2 class="heading-2">
					<?= $title; ?>
				</h2>
			</div>
		<?php endif; ?>

		<div class="grid grid--faq">

			<?php
			foreach ($faqs as $faq) {
				get_template_part('templates/component/component', 'accordion', [
					'faq' => $faq,
				]);
			}
			?>

		</div>
	</div>
</section>