<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Review cards slider', 'moonsio'),
	'description' => __('Een overzicht van je reviews in een slider', 'moonsio'),
	'category' => 'moonsio',
	'icon' => 'admin-page',
	'post_types' => [],


	'fields' => [

		[
			'key' => 'reviews_slider_title',
			'label' => 'Reviews',
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Wat zeggen onze klanten?',
		],

		[
			'key' => 'reviews_slider_options_accordion',
			'label' => 'Opties',
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'reviews_slider_count',
			'label' => __('Aantal reviews', 'moonsio'),
			'name' => 'count',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				'3' => __('3', 'moonsio'),
				'6' => __('6', 'moonsio'),
			],
			'default_value' => '3',
		],

		[
			'key' => 'reviews_slider_posts',
			'label' => __('Reviews selecteren', 'moonsio'),
			'instructions' => __('Als hier reviews ingevuld zijn, dan worden alleen die getoond. Als hier niks ingevuld is, dan worden standaard alle reviews getoond.', 'moonsio'),
			'name' => 'posts',
			'type' => 'post_object',
			'post_type' => 'review',
			'multiple' => true,
			'return_format' => 'id',
			'ui' => true,
		],

		// [
		// 	'key' => 'reviews_slider_order_by',
		// 	'label' => __('Reviews sorteren op basis van:', 'moonsio'),
		// 	'name' => 'order_by',
		// 	'type' => 'select',
		// 	'ui' => true,
		// 	'choices' => [
		// 		'date' => __('Datum', 'moonsio'),
		// 		'title' => __('Naam auteur', 'moonsio'),
		// 		'rand' => __('Willekeurig', 'moonsio'),
		// 	],
		// 	'default_value' => 'title',
		// ],

		// [
		// 	'key' => 'reviews_slider_order',
		// 	'label' => __('Volgorde', 'moonsio'),
		// 	'name' => 'order',
		// 	'type' => 'select',
		// 	'ui' => true,
		// 	'choices' => [
		// 		'ASC' => __('A - Z | Oplopend', 'moonsio'),
		// 		'DESC' => __('Z - A | Aflopend', 'moonsio'),
		// 	],
		// 	'default_value' => 'title',
		// ],

		// [
		// 	'key' => 'reviews_slider_style',
		// 	'label' => __('Stijl van de review', 'moonsio'),
		// 	'name' => 'style',
		// 	'type' => 'select',
		// 	'ui' => true,
		// 	'choices' => [
		// 		'style_1' => __('Stijl 1', 'moonsio'),
		// 		'style_2' => __('Stijl 2', 'moonsio'),
		// 		'style_3' => __('Stijl 3', 'moonsio')
		// 	],
		// 	'default_value' => 'style_1',
		// ],

		// [
		// 	'key' => 'reviews_slider_slides_tablet',
		// 	'label' => __('Aantal slides naast elkaar tablet', 'moonsio'),
		// 	'name' => 'slides_tablet',
		// 	'type' => 'select',
		// 	'ui' => true,
		// 	'choices' => [
		// 		'1' => __('1', 'moonsio'),
		// 		'2' => __('2', 'moonsio'),
		// 		'3' => __('3', 'moonsio')
		// 	],
		// 	'default_value' => '2',
		// ],

		// [
		// 	'key' => 'reviews_slider_slides_pc',
		// 	'label' => __('Aantal slides naast elkaar pc', 'moonsio'),
		// 	'name' => 'slides_pc',
		// 	'type' => 'select',
		// 	'ui' => true,
		// 	'choices' => [
		// 		'1' => __('1', 'moonsio'),
		// 		'2' => __('2', 'moonsio'),
		// 		'3' => __('3', 'moonsio')
		// 	],
		// 	'default_value' => '3',
		// ],

		// [
		// 	'key' => 'testomonials_slider_arrows',
		// 	'label' => __('Pijlen navigatie tonen?', 'moonsio'),
		// 	'name' => 'slider_arrows',
		// 	'type' => 'true_false',
		// 	'ui' => true,
		// 	'ui_on_text' => __('Ja', 'moonsio'),
		// 	'ui_off_text' => __('Nee', 'moonsio'),
		// 	'default_value' => false,
		// ],

		[
			'key' => 'reviews_slider_style_accordion',
			'label' => 'Vormgeving',
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'reviews_slider_bg_color',
			'label' => __('Achtergrondkleur sectie', 'moonsio'),
			'name' => 'bg_color',
			'type' => 'select',
			'ui' => true,
			'allow_null' => true,
			'choices' => [
				'section--light' => __('Licht', 'moonsio'),
				'section--grey' => __('Grijs', 'moonsio')
			],
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'reviews_slider_padding_top',
			'label' => 'Tussenruimte boven',
			'name' => 'padding_top',
			'type' => 'select',
			'choices' => [
				'pt-sm' => __('Klein', 'moonsio'),
				'pt-md' => __('Gemiddeld', 'moonsio'),
				'pt-lg' => __('Groot', 'moonsio')
			],
			'default_value' => 'pt-lg',
			'ui' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'reviews_slider_padding_bottom',
			'label' => 'Tussenruimte onder',
			'name' => 'padding_bottom',
			'type' => 'select',
			'choices' => [
				'pb-sm' => __('Klein', 'moonsio'),
				'pb-md' => __('Gemiddeld', 'moonsio'),
				'pb-lg' => __('Groot', 'moonsio')
			],
			'default_value' => 'pb-lg',
			'ui' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

	],
];
