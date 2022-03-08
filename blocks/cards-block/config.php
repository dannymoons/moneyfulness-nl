<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Diensten nieuw', 'moonsio'),
	'description' => __('Sectie met daarin meerdere blokken.', 'moonsio'),
	'category' => 'moonsio',
	'icon' => 'admin-page',
	'post_types' => [],

	'fields' => [

		[
			'key' => 'cards_block_content_accordion',
			'label' => __('Diensten blok inhoud', 'moonsio'),
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => true,
		],

		[
			'key' => 'cards_block_enable_duo_heading',
			'label' => __('Geavanceerde titel gebruiken?', 'moonsio'),
			'name' => 'enable_duo_heading',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'cards_title',
			'label' => 'Sectie titel',
			'name' => 'cards_title',
			'type' => 'text',
			'default_value' => 'Hoe kunnen wij je helpen?',
			'conditional_logic' => [
				[
					[
						'field' => 'cards_block_enable_duo_heading',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'cards_block_title_pre',
			'label' => __('Voor titel', 'moonsio'),
			'name' => 'title_pre',
			'type' => 'text',
			// 'default_value' => 'Deze',
			'conditional_logic' => [
				[
					[
						'field' => 'cards_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'cards_block_title_main',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title_main',
			'type' => 'text',
			// 'default_value' => 'titel is',
			'conditional_logic' => [
				[
					[
						'field' => 'cards_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'cards_block_title_after',
			'label' => __('Na titel', 'moonsio'),
			'name' => 'title_after',
			'type' => 'text',
			// 'default_value' => 'geavanceerd',
			'conditional_logic' => [
				[
					[
						'field' => 'cards_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		// [
		// 	'key' => 'cards_block_show_text',
		// 	'label' => __('Tekst laten zien?', 'moonsio'),
		// 	'name' => 'show_text',
		// 	'type' => 'true_false',
		// 	'ui' => true,
		// 	'ui_on_text' => __('Ja', 'moonsio'),
		// 	'ui_off_text' => __('Nee', 'moonsio'),
		// 	'default_value' => false,
		// ],

		[
			'key' => 'cards_block_text',
			'label' => __('Tekst', 'moonsio'),
			'name' => 'text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
			'default_value' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat. Nisi fugiat consequat pariatur in laboris ut non do in dolor incididunt enim.',
			'conditional_logic' => [
				[
					[
						'field' => 'cards_block_show_text',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],



		[
			'key' => 'cards_repeater_accordion',
			'label' => __('Blokken', 'moonsio'),
			'name' => 'accordion_cards',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'cards_creator',
			// 'label' => 'Blokken',
			'name' => 'cards',
			'type' => 'repeater',
			'layout' => 'block',
			'sub_fields' => [

				[
					'key' => 'card_accordion',
					'label' => 'Blok met inhoud',
					'name' => 'accordion_card',
					'type' => 'accordion',
					'multi_expand' => false,
					'open' => false,
				],

				[
					'key' => 'card_image',
					'label' => __('Afbeelding', 'moonsio'),
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'id',
				],

				[
					'key' => 'card_title',
					'label' => 'Blok titel',
					'name' => 'title',
					'type' => 'text',
					'default_value' => 'Dit is de titel'
				],

				[
					'key' => 'card_text',
					'label' => 'Blok tekst',
					'name' => 'text',
					'type' => 'wysiwyg',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => '0',
					'default_value' => 'Pariatur id quis fugiat velit do est deserunt esse incididunt.'
				],

				[
					'key' => 'card_open_popup',
					'label' => 'Link of popup openen?',
					'name' => 'popup',
					'type' => 'true_false',
					'ui' => true,
					'ui_on_text' => __('Popup', 'moonsio'),
					'ui_off_text' => __('Link', 'moonsio'),
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

				[
					'key' => 'card_button',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'link',
					'conditional_logic' => [
						[
							[
								'field' => 'card_open_popup',
								'operator' => '==',
								'value' => '0',
							],
						],
					],
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

				[
					'key' => 'card_custom_button_text',
					'label' => 'Knop tekst',
					'name' => 'button_text',
					'type' => 'text',
					'conditional_logic' => [
						[
							[
								'field' => 'card_open_popup',
								'operator' => '==',
								'value' => '1',
							],
						],
					],
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

				[
					'key' => 'card_data_popup',
					'label' => __('Welke popup wil je tonen?', 'moonsio'),
					'name' => 'data_popup',
					'type' => 'post_object',
					'post_type' => [
						'popup',
					],
					'multiple' => false,
					'return_format' => 'id',
					'ui' => true,
					'conditional_logic' => [
						[
							[
								'field' => 'card_open_popup',
								'operator' => '==',
								'value' => '1',
							],
						],
					],
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
				],

				// [
				// 	'key' => 'card_button',
				// 	'label' => 'Link',
				// 	'name' => 'link',
				// 	'type' => 'link',
				// 	// 'wrapper' => [
				// 	// 	'width' => '50',
				// 	// 	'class' => '',
				// 	// 	'id' => '',
				// 	// ],
				// ],
				// ],
			],
		],

		[
			'key' => 'cards_layout_accordion',
			'label' => __('Layout & Structuur', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],
		[
			'key' => 'cards_block_grid',
			'label' => 'Kolommen',
			'name' => 'grid',
			'type' => 'radio',
			'choices' => [
				'grid--12' => __('1 kolom', 'moonsio'),
				'grid--66' => __('2 kolommen', 'moonsio'),
				'grid--444' => __('3 kolommen', 'moonsio'),
				'grid--3333' => __('4 kolommen', 'moonsio'),
			],
			'default_value' => 'grid--444',
			'ui' => true,
			// 'allow_null' => true,
		],


		[
			'key' => 'cards_styling_accordion',
			'label' => __('Vormgeving', 'moonsio'),
			'name' => 'accordion_4',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'cards_block_style',
			'label' => 'Blok stijl',
			'name' => 'card_style',
			'type' => 'select',
			'choices' => [
				'card--cascade' => __('Overlappend', 'moonsio'),
				'card--overlay' => __('Achtergrond', 'moonsio'),
			],
			'ui' => true,
			'allow_null' => true,
		],

		[
			'key' => 'cards_block_hide_img',
			'label' => __('Afbeelding tonen?', 'moonsio'),
			'name' => 'enable_card_image',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio'),
			'default_value' => true,
		],

		[
			'key' => 'cards_block_bg_color',
			'label' => __('Achtergrondkleur sectie', 'moonsio'),
			'name' => 'bg_color',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				'section--light' => __('Licht', 'moonsio'),
				'section--grey' => __('Grijs', 'moonsio'),
			],
			'allow_null' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'cards_block_padding_top',
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
			'key' => 'cards_block_padding_bottom',
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

		[
			'key' => 'cards_block_text_align',
			'label' => 'Tekst uitlijning',
			'name' => 'align_text',
			'type' => 'select',
			'choices' => [
				'text-center' => __('Midden', 'moonsio'),
				'text-right' => __('Rechts', 'moonsio')
			],
			'ui' => true,
			'allow_null' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],
	],
];
