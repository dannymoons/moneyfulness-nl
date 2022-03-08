<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Content blok', 'moonsio'),
	'description' => __('Een content blok met daarin ruimte voor tekst, knoppen en een afbeelding.', 'moonsio'),
	'category' => 'moonsio',
	'icon' => '<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><g><path d="m7.5 38.5h497v435h-497z" fill="#fff6cc"/><path d="m464.5 38.5h40v435h-40z" fill="#fff1b5"/><path d="m7.5 38.5h497v57.167h-497z" fill="#7b7b7f"/><path d="m464.5 38.5h40v57.167h-40z" fill="#6b6b73"/></g><path d="m139.933 208.8h309.531v172.963h-309.531z" fill="#00cfe9"/><g><path d="m63.675 255.878h168.827v168.827h-168.827z" fill="#ff7de9"/><path d="m192.503 255.878h40v168.827h-40z" fill="#ff5ee4"/><g><g><g><circle cx="147.471" cy="342.09" fill="#fd0" r="36.403"/></g></g></g></g></g></g><g><path d="m41.922 59.583c-9.992 0-10.008 15 0 15 9.992 0 10.008-15 0-15z"/><path d="m68.755 59.583c-9.992 0-10.008 15 0 15 9.992 0 10.008-15 0-15z"/><path d="m95.589 59.583c-9.992 0-10.008 15 0 15 9.991 0 10.008-15 0-15z"/><path d="m504.5 31h-497c-4.142 0-7.5 3.358-7.5 7.5v435c0 4.142 3.358 7.5 7.5 7.5h497c4.143 0 7.5-3.358 7.5-7.5v-435c0-4.142-3.357-7.5-7.5-7.5zm-489.5 435v-362.833h338.416c9.697 0 9.697-15 0-15h-338.416v-42.167h482v42.167h-98.44c-9.697 0-9.697 15 0 15h98.44v362.833z"/><path d="m449.465 201.3h-309.531c-4.142 0-7.5 3.358-7.5 7.5v39.578h-68.759c-4.142 0-7.5 3.358-7.5 7.5v92.143c0 11.046 15 10.91 15-.21v-84.433h153.828v153.827h-153.828v-28.296c0-9.697-15-9.697-15 0v35.796c0 4.142 3.358 7.5 7.5 7.5h168.828c4.142 0 7.5-3.358 7.5-7.5v-35.442h209.462c4.143 0 7.5-3.358 7.5-7.5v-172.963c0-4.142-3.358-7.5-7.5-7.5zm-7.5 172.963h-201.962v-118.385c0-4.142-3.358-7.5-7.5-7.5h-85.069v-32.078h294.531z"/><path d="m62.536 163.5h92.971c9.697 0 9.697-15 0-15h-92.971c-9.698 0-9.698 15 0 15z"/><path d="m303.005 163.5h27.502c9.697 0 9.697-15 0-15h-27.502c-9.697 0-9.697 15 0 15z"/><path d="m362.484 163.5h27.501c9.697 0 9.697-15 0-15h-27.501c-9.697 0-9.697 15 0 15z"/><path d="m449.465 148.5h-27.502c-9.697 0-9.697 15 0 15h27.502c9.697 0 9.697-15 0-15z"/><path d="m276 263.664h130c9.697 0 9.697-15 0-15h-130c-9.697 0-9.697 15 0 15z"/><path d="m276 302.782h130c9.697 0 9.697-15 0-15h-130c-9.697 0-9.697 15 0 15z"/><path d="m406 326.9h-75.493c-9.697 0-9.697 15 0 15h75.493c9.697 0 9.697-15 0-15z"/><path d="m84.748 368.779c1.443 3.621 6.159 5.62 9.743 4.191l16.45-6.554c26.478 38.964 86.778 14.901 79.797-31.794l16.501-6.575c9.009-3.589 3.457-17.522-5.552-13.935l-16.004 6.377c-25.865-43.651-91.965-17.823-80.82 32.202l-15.923 6.344c-3.849 1.534-5.725 5.897-4.192 9.744zm91.626-26.69c-.114 27.016-33.879 39.012-51.022 18.585l50.971-20.309c.033.571.051 1.146.051 1.724zm-57.806 0c.242-28.721 37.253-39.51 52.983-15.969l-52.555 20.94c-.281-1.615-.428-3.276-.428-4.971z"/></g></g></svg>', // nog te wijzigen
	'post_types' => [],

	'fields' => [

		[
			'key' => 'content_block_content_accordion',
			'label' => __('Content blok inhoud', 'moonsio'),
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => true,
		],

		// [
		// 	'key' => 'content_block_show_title',
		// 	'label' => __('Titel laten zien?', 'moonsio'),
		// 	'name' => 'show_title',
		// 	'type' => 'true_false',
		// 	'ui' => true,
		// 	'ui_on_text' => __('Ja', 'moonsio'),
		// 	'ui_off_text' => __('Nee', 'moonsio'),
		// 	'default_value' => true,
		// ],

		[
			'key' => 'content_block_enable_duo_heading',
			'label' => __('Geavanceerde titel gebruiken?', 'moonsio'),
			'name' => 'enable_duo_heading',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'content_block_title',
			'label' => __('Titel', 'moonsio'),
			'name' => 'content_title',
			'type' => 'text',
			'default_value' => 'Titel van je content blok',
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_enable_duo_heading',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'content_block_title_pre',
			'label' => __('Voor titel', 'moonsio'),
			'name' => 'hero_title_pre',
			'type' => 'text',
			'default_value' => 'Deze',
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'content_block_title_main',
			'label' => __('Titel', 'moonsio'),
			'name' => 'hero_title_main',
			'type' => 'text',
			'default_value' => 'title is',
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'content_block_title_after',
			'label' => __('Na titel', 'moonsio'),
			'name' => 'hero_title_after',
			'type' => 'text',
			'default_value' => 'geavanceerd',
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'content_block_intro',
			'label' => __('Tekst', 'moonsio'),
			'name' => 'content_text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
			'default_value' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat. Nisi fugiat consequat pariatur in laboris ut non do in dolor incididunt enim.'
		],

		[
			'key' => 'content_block_hide_img',
			'label' => __('Afbeelding verbergen?', 'moonsio'),
			'name' => 'hide_mirror',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio'),
		],

		[
			'key' => 'content_block_image',
			'label' => __('Afbeelding', 'moonsio'),
			'name' => 'content_image',
			'type' => 'image',
			'return_format' => 'id',
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_hide_img',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'content_block_buttons_accordion',
			'label' => __('Knoppen', 'moonsio'),
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'content_block_buttons',
			'label' => __('Knoppen', 'moonsio'),
			'name' => 'content_block_buttons',
			'type' => 'repeater',
			'max' => '2',
			'layout' => 'block',
			'sub_fields' => [

				[
					'key' => 'content_block_open_popup',
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
					'key' => 'content_block_button',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'link',
					'conditional_logic' => [
						[
							[
								'field' => 'content_block_open_popup',
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
					'key' => 'content_block_custom_button_text',
					'label' => 'Knop tekst',
					'name' => 'button_text',
					'type' => 'text',
					'conditional_logic' => [
						[
							[
								'field' => 'content_block_open_popup',
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
					'key' => 'content_block_data_popup',
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
								'field' => 'content_block_open_popup',
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
					'key' => 'content_block_button_style',
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
			'key' => 'content_block_styling_accordion',
			'label' => __('Vormgeving', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'content_block_bg_color',
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

		// [
		// 	'key' => 'content_block_spacing',
		// 	'label' => 'Tussenruimte',
		// 	'name' => 'spacing',
		// 	'type' => 'select',
		// 	'choices' => [
		// 		'section--tight' => __('Klein', 'moonsio'),
		// 		'section--wide' => __('Groot', 'moonsio')
		// 	],
		// 	'default_value' => 'section--wide',
		// 	'ui' => true,
		// 	'wrapper' => [
		// 		'width' => '50',
		// 		'class' => '',
		// 		'id' => '',
		// 	],
		// ],

		[
			'key' => 'content_block_padding_top',
			'label' => 'Tussenruimte boven',
			'name' => 'padding_top',
			'type' => 'select',
			'choices' => [
				'pt-0' => __('Geen', 'moonsio'),
				'pt-sm' => __('Klein', 'moonsio'),
				'pt-md' => __('Gemiddeld', 'moonsio'),
				'pt-lg' => __('Groot', 'moonsio'),
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
			'key' => 'content_block_padding_bottom',
			'label' => 'Tussenruimte onder',
			'name' => 'padding_bottom',
			'type' => 'select',
			'choices' => [
				'pb-0' => __('Geen', 'moonsio'),
				'pb-sm' => __('Klein', 'moonsio'),
				'pb-md' => __('Gemiddeld', 'moonsio'),
				'pb-lg' => __('Groot', 'moonsio'),
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
			'key' => 'content_block_width',
			'label' => 'Breedte van de sectie',
			'name' => 'width',
			'type' => 'select',
			'choices' => [
				'section__container' => __('Standaard', 'moonsio'),
				'section__container section__container--xs' => __('XS', 'moonsio'),
				'section__container section__container--sm' => __('SM', 'moonsio'),
			],
			'default_value' => 'section--wide',
			'ui' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'content_block_align_text',
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

		[
			'key' => 'content_block_text_size',
			'label' => 'Tekst grootte',
			'name' => 'text_size',
			'type' => 'select',
			'choices' => [
				'text--lg' => __('Groot', 'moonsio'),
			],
			'ui' => true,
			'allow_null' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'content_block_align_self',
			'label' => __('Content kolom uitlijnen', 'moonsio'),
			'name' => 'align_content',
			'type' => 'select',
			'choices' => [
				'align-self-center' => __('Midden', 'moonsio'),
			],
			'allow_null' => true,
			'ui' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_hide_img',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'content_block_boxed_toggle',
			'label' => __('Content in een box weergeven?', 'moonsio'),
			'name' => 'boxed_toggle',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio'),
			// 'wrapper' => [
			// 	'width' => '50',
			// 	'class' => '',
			// 	'id' => '',
			// ],

		],

		[
			'key' => 'content_block_boxed_bg',
			'label' => __('Achtergrondkleur box', 'moonsio'),
			'name' => 'boxed_bg',
			'type' => 'select',
			'choices' => [
				'bg--primary' => __('', 'moonsio'),
				'bg--secondary' => __('', 'moonsio'),
				'bg--light' => __('', 'moonsio'),
				'bg--grey' => __('', 'moonsio'),
			],
			'ui' => true,
			'allow_null' => true,
			'wrapper' => [
				'width' => '',
				'class' => 'moonsio-color-swatches',
				'id' => '',
			],
			'layout' => 'horizontal',

		],

		[
			'key' => 'content_block_mirror',
			'label' => __('Content spiegelen?', 'moonsio'),
			'name' => 'content_mirror',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Spiegelen', 'moonsio'),
			'ui_off_text' => __('Standaard', 'moonsio'),
			// 'wrapper' => [
			// 	'width' => '50',
			// 	'class' => '',
			// 	'id' => '',
			// ],
			'conditional_logic' => [
				[
					[
						'field' => 'content_block_hide_img',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],
	],
];
