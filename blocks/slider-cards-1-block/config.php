<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Diensten slider', 'moonsio'),
	'description' => __('Een overzicht van je diensten met een slider', 'moonsio'),
	'category' => 'moonsio',
	'icon' => 'admin-page',
	'post_types' => [],

	'fields' => [

		[
			'key' => 'slider_cards_1_content_accordion',
			'label' => 'Inhoud diensten slider',
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => true,
		],

		[
			'key' => 'slider_cards_enable_duo_heading',
			'label' => __('Geavanceerde titel gebruiken?', 'moonsio'),
			'name' => 'enable_duo_heading',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'slider_cards_title',
			'label' => __('Titel', 'moonsio'),
			'name' => 'slider_cards_title',
			'type' => 'text',
			'default_value' => 'Hoe kunnen wij je helpen?',
			'conditional_logic' => [
				[
					[
						'field' => 'slider_cards_enable_duo_heading',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'slider_cards_title_pre',
			'label' => __('Voor titel', 'moonsio'),
			'name' => 'title_pre',
			'type' => 'text',
			'default_value' => 'Deze',
			'conditional_logic' => [
				[
					[
						'field' => 'slider_cards_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'slider_cards_title_main',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title_main',
			'type' => 'text',
			'default_value' => 'titel is',
			'conditional_logic' => [
				[
					[
						'field' => 'slider_cards_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'slider_cards_title_after',
			'label' => __('Na titel', 'moonsio'),
			'name' => 'title_after',
			'type' => 'text',
			'default_value' => 'geavanceerd',
			'conditional_logic' => [
				[
					[
						'field' => 'slider_cards_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'slider_cards_text',
			'label' => 'Tekst',
			'name' => 'cards_text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
			'default_value' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat. Nisi fugiat consequat pariatur in laboris ut non do in dolor incididunt enim.'
		],

		[
			'key' => 'slider_cards_1_buttons_accordion',
			'label' => __('Knoppen', 'moonsio'),
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'slider_cards_1_buttons',
			'label' => __('Knoppen', 'moonsio'),
			'name' => 'slider_cards_1_buttons',
			'type' => 'repeater',
			'max' => '2',
			'layout' => 'block',
			'sub_fields' => [
				[
					'key' => 'slider_cards_1_button',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'link',
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

				[
					'key' => 'slider_cards_1_button_style',
					'label' => __('Stijl', 'moonsio'),
					'name' => 'style',
					'type' => 'select',
					'ui' => true,
					'choices' => [
						'btn--primary' => __('Accentkleur 1', 'moonsio'),
						'btn--secondary' => __('Accentkleur 2', 'moonsio'),
						'btn--ghost' => __('Omlijnd', 'moonsio'),
						'btn--white' => __('Wit', 'moonsio'),
					],
					'default_value' => 'btn--primary',
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

			],
		],

		[
			'key' => 'slider_cards_accordion',
			'label' => __('Dia\'s met blokken', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'slider_cards_repeater',
			// 'label' => 'Dia\'s met blokken',
			'name' => 'cards_repeater',
			'type' => 'repeater',
			'layout' => 'block',
			'sub_fields' => [
				[
					'key' => 'slider_card_accordion',
					'label' => 'Blok',
					'name' => 'accordion_4',
					'type' => 'accordion',
					'multi_expand' => true,
					'open' => false,
				],

				// [
				// 	'key' => 'slider_card_style',
				// 	'label' => 'Blok stijl',
				// 	'name' => 'card_style',
				// 	'type' => 'select',
				// 	'choices' => [
				// 		' ' => __('Standaard', 'moonsio'),
				// 		'card--cascade' => __('Overlappend', 'moonsio'),
				// 		'card--overlay' => __('Achtergrond', 'moonsio'),
				// 	],
				// 	'ui' => true,
				// ],

				[
					'key' => 'slider_card_title',
					'label' => 'Blok titel',
					'name' => 'card_title',
					'type' => 'text',
					'default_value' => 'Dit is de titel'
				],

				[
					'key' => 'slider_card_text',
					'label' => 'Blok tekst',
					'name' => 'card_text',
					'type' => 'wysiwyg',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => '0',
					'default_value' => 'Pariatur id quis fugiat velit do est deserunt esse incididunt.'
				],

				[
					'key' => 'slider_card_image',
					'label' => 'Blok afbeelding',
					'name' => 'card_image',
					'type' => 'image',
					'return_format' => 'id'
				],

				[
					'key' => 'slider_card_button',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'link',
					// 'wrapper' => [
					// 	'width' => '50',
					// 	'class' => '',
					// 	'id' => '',
					// ],
				],
			],
		],

		[
			'key' => 'slider_cards_1_styling_accordion',
			'label' =>  __('Vormgeving', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'slider_cards_layout',
			'label' => __('Layout', 'moonsio'),
			'name' => 'layout',
			'type' => 'select',
			'choices' => [
				'slider_side' => __('Slider aan de zijkant', 'moonsio'),
				'slider_below' => __('Slider onder de titel', 'moonsio'),
			],
			'default_value' => 'slider_side',
			'ui' => true,
		],

		[
			'key' => 'slider_cards_1_bg_color',
			'label' => __('Achtergrond kleur', 'moonsio'),
			'name' => 'bg_color',
			'type' => 'select',
			'choices' => [
				'bg--grey' => __('Grijs', 'moonsio'),
				'bg--light' => __('Licht', 'moonsio'),
			],
			'allow_null' => true,
			'default_value' => 'bg-color-light',
			'ui' => true,
		],

		[
			'key' => 'slider_cards_1_bg_style',
			'label' => __('Achtergrond stijl', 'moonsio'),
			'name' => 'bg_style',
			'type' => 'select',
			'choices' => [
				'boxed' => __('Ingekaderd', 'moonsio'),
				'full' => __('Volledige breedte', 'moonsio'),
			],
			'default_value' => 'boxed',
			'ui' => true,
		],

		[
			'key' => 'slider_cards_style',
			'label' => 'Blok stijl',
			'name' => 'card_style',
			'type' => 'select',
			'choices' => [
				// ' ' => __('Standaard', 'moonsio'),
				'card--cascade' => __('Overlappend', 'moonsio'),
				'card--overlay' => __('Achtergrond', 'moonsio'),
			],
			'allow_null' => true,
			'ui' => true,
		],

	],
];
