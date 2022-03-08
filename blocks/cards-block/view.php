<?php defined('ABSPATH') || exit('Forbidden');

$title = get_field('cards_title');
$duoheading = get_field('cards_block_enable_duo_heading');
$title_pre = get_field('cards_block_title_pre');
$title_main = get_field('cards_block_title_main');
$title_after = get_field('cards_block_title_after');
$text = get_field('cards_block_text');
$show_text = get_field('cards_block_show_text');
$text_align = get_field('cards_block_text_align');
$cards = get_field('cards_creator');
$card_style = get_field('cards_block_style');
$show_image = get_field('cards_block_hide_img');
$bg_color = get_field('cards_block_bg_color');
$padding_top = get_field('cards_block_padding_top');
$padding_bottom = get_field('cards_block_padding_bottom');
// $spacing = get_field('cards_block_spacing');
$grid_template = get_field('cards_block_grid');

?>

<section class="section <?= $bg_color; ?> <?= $padding_top; ?> <?= $padding_bottom; ?>">
	<div class="section__container">
		<div class="section__header <?= $text_align; ?>">

			<?php if ($title || $title_main) {
				get_template_part('templates/component/component', 'heading', [
					'duoheading' => $duoheading,
					'title' => $title,
					'title_pre' => $title_pre,
					'title_main' => $title_main,
					'title_after' => $title_after,
				]);
			}
			?>

			<?php if ($text) {
				echo $text;
			}
			?>

		</div>
		<div class="grid <?= $grid_template; ?>">

			<?php
			foreach ($cards as $card) {
				get_template_part('templates/component/component', 'card', [
					'card' => $card,
					'card_style' => $card_style,
					'show_image' => $show_image,
				]);
			}
			?>

		</div>
	</div>
</section>