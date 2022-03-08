<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Stappen tijdlijn', 'moonsio'),
	'description' => __('Verticale stappen voor bijvoorbeeld uitleg van hoe iets werkt', 'moonsio'),
	'category' => 'moonsio',
	'icon' => '<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m500.646 129.104h-319.833c-2.128 0-3.854-1.725-3.854-3.854v-62.694c0-2.128 1.725-3.854 3.854-3.854h319.833c2.128 0 3.854 1.725 3.854 3.854v62.695c0 2.128-1.726 3.853-3.854 3.853z" fill="#d2d2d7"/></g><g><path d="m95.134 143.084h-76.907c-5.924 0-10.727-4.803-10.727-10.727v-76.908c0-5.924 4.803-10.727 10.727-10.727h76.908c5.924 0 10.727 4.803 10.727 10.727v76.908c-.001 5.924-4.803 10.727-10.728 10.727z" fill="#91dafa"/></g><g><path d="m89.421 44.722h-45.977c9.08 0 16.44 7.36 16.44 16.44v65.481c0 9.08-7.361 16.44-16.44 16.44h45.978c9.08 0 16.44-7.36 16.44-16.44v-65.48c-.001-9.08-7.361-16.441-16.441-16.441z" fill="#6ec2fc"/></g><g><path d="m500.646 291.201h-319.833c-2.128 0-3.854-1.725-3.854-3.854v-62.695c0-2.128 1.725-3.854 3.854-3.854h319.833c2.128 0 3.854 1.725 3.854 3.854v62.695c0 2.129-1.726 3.854-3.854 3.854z" fill="#d2d2d7"/></g><g><path d="m95.134 305.181h-76.907c-5.924 0-10.727-4.803-10.727-10.727v-76.908c0-5.924 4.803-10.727 10.727-10.727h76.908c5.924 0 10.727 4.803 10.727 10.727v76.908c-.001 5.924-4.803 10.727-10.728 10.727z" fill="#91dafa"/></g><g><path d="m89.421 206.819h-45.977c9.08 0 16.44 7.361 16.44 16.44v65.481c0 9.08-7.361 16.44-16.44 16.44h45.978c9.08 0 16.44-7.361 16.44-16.44v-65.481c-.001-9.079-7.361-16.44-16.441-16.44z" fill="#6ec2fc"/></g><g><path d="m500.646 453.298h-319.833c-2.128 0-3.854-1.725-3.854-3.854v-62.695c0-2.128 1.725-3.854 3.854-3.854h319.833c2.128 0 3.854 1.725 3.854 3.854v62.695c0 2.129-1.726 3.854-3.854 3.854z" fill="#d2d2d7"/></g><g><path d="m95.134 467.278h-76.907c-5.924 0-10.727-4.803-10.727-10.727v-76.908c0-5.924 4.803-10.727 10.727-10.727h76.908c5.924 0 10.727 4.803 10.727 10.727v76.908c-.001 5.924-4.803 10.727-10.728 10.727z" fill="#91dafa"/></g><g><path d="m498.594 58.702h-45.978c3.262 0 5.906 2.644 5.906 5.906v58.59c0 3.262-2.644 5.906-5.906 5.906h45.978c3.262 0 5.906-2.644 5.906-5.906v-58.59c0-3.262-2.644-5.906-5.906-5.906z" fill="#b9b9be"/></g><g><path d="m498.594 220.799h-45.978c3.262 0 5.906 2.645 5.906 5.906v58.59c0 3.262-2.644 5.906-5.906 5.906h45.978c3.262 0 5.906-2.645 5.906-5.906v-58.59c0-3.262-2.644-5.906-5.906-5.906z" fill="#b9b9be"/></g><g><path d="m498.594 382.896h-45.978c3.262 0 5.906 2.644 5.906 5.906v58.59c0 3.262-2.644 5.906-5.906 5.906h45.978c3.262 0 5.906-2.644 5.906-5.906v-58.59c0-3.262-2.644-5.906-5.906-5.906z" fill="#b9b9be"/></g><g><path d="m89.421 368.916h-45.977c9.08 0 16.44 7.36 16.44 16.44v65.481c0 9.079-7.361 16.44-16.44 16.44h45.978c9.08 0 16.44-7.361 16.44-16.44v-65.481c-.001-9.08-7.361-16.44-16.441-16.44z" fill="#6ec2fc"/></g><g><path d="m95.134 150.584h-76.907c-10.051 0-18.227-8.177-18.227-18.227v-76.908c0-10.05 8.177-18.227 18.227-18.227h76.907c10.05 0 18.227 8.177 18.227 18.227v76.908c0 10.05-8.176 18.227-18.227 18.227zm-76.907-98.362c-1.779 0-3.227 1.448-3.227 3.227v76.908c0 1.779 1.447 3.227 3.227 3.227h76.908c1.779 0 3.227-1.448 3.227-3.227v-76.908c0-1.779-1.448-3.227-3.227-3.227z"/></g><g><path d="m95.134 312.681h-76.907c-10.051 0-18.227-8.177-18.227-18.227v-76.907c0-10.05 8.177-18.227 18.227-18.227h76.907c10.05 0 18.227 8.177 18.227 18.227v76.907c0 10.05-8.176 18.227-18.227 18.227zm-76.907-98.362c-1.779 0-3.227 1.448-3.227 3.227v76.907c0 1.779 1.447 3.227 3.227 3.227h76.908c1.779 0 3.227-1.448 3.227-3.227v-76.907c0-1.779-1.448-3.227-3.227-3.227z"/></g><g><path d="m95.134 474.778h-76.907c-10.051 0-18.227-8.177-18.227-18.227v-24.135c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v24.135c0 1.779 1.447 3.227 3.227 3.227h76.908c1.779 0 3.227-1.448 3.227-3.227v-76.908c0-1.779-1.448-3.227-3.227-3.227h-76.908c-1.779 0-3.227 1.448-3.227 3.227v22.773c0 4.142-3.358 7.5-7.5 7.5s-7.5-3.358-7.5-7.5v-22.773c0-10.05 8.176-18.227 18.227-18.227h76.908c10.05 0 18.227 8.177 18.227 18.227v76.908c-.001 10.05-8.177 18.227-18.228 18.227z"/></g><g><path d="m500.646 136.604h-319.834c-6.26 0-11.354-5.093-11.354-11.354v-62.694c0-6.26 5.093-11.354 11.354-11.354h59.68c4.142 0 7.5 3.358 7.5 7.5s-3.358 7.5-7.5 7.5h-56.034v55.402h312.542v-55.402h-226.507c-4.142 0-7.5-3.358-7.5-7.5s3.358-7.5 7.5-7.5h230.153c6.261 0 11.354 5.093 11.354 11.354v62.695c0 6.26-5.093 11.353-11.354 11.353zm0-70.402h.01z"/></g><g><path d="m500.646 460.798h-319.834c-6.26 0-11.354-5.093-11.354-11.354v-62.695c0-6.261 5.093-11.354 11.354-11.354h319.833c6.261 0 11.354 5.093 11.354 11.354v62.695c.001 6.261-5.092 11.354-11.353 11.354zm-316.187-15h312.541v-55.402h-312.541z"/></g><g><path d="m500.646 298.701h-319.834c-6.26 0-11.354-5.093-11.354-11.354v-62.695c0-6.261 5.093-11.354 11.354-11.354h319.833c6.261 0 11.354 5.093 11.354 11.354v62.695c.001 6.261-5.092 11.354-11.353 11.354zm-316.187-15h312.541v-55.402h-312.541z"/></g></g></svg>',
	'post_types' => [],

	'fields' => [

		[
			'key' => 'stepper_vertical_content_accordion',
			'label' => 'Titel & inhoud',
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'stepper_vertical_title',
			'label' => 'Titel van de sectie',
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Dit is hoe het werkt'
		],

		[
			'key' => 'stepper_vertical_enable_duo_heading',
			'label' => __('Geavanceerde titel gebruiken?', 'moonsio'),
			'name' => 'enable_duo_heading',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'stepper_vertical_title',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Titel van je blok',
			'conditional_logic' => [
				[
					[
						'field' => 'stepper_vertical_enable_duo_heading',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'stepper_vertical_title_pre',
			'label' => __('Voor titel', 'moonsio'),
			'name' => 'title_pre',
			'type' => 'text',
			'default_value' => 'Deze',
			'conditional_logic' => [
				[
					[
						'field' => 'stepper_vertical_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'stepper_vertical_title_main',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title_main',
			'type' => 'text',
			'default_value' => 'titel is',
			'conditional_logic' => [
				[
					[
						'field' => 'stepper_vertical_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'stepper_vertical_title_after',
			'label' => __('Na titel', 'moonsio'),
			'name' => 'title_after',
			'type' => 'text',
			'default_value' => 'geavanceerd',
			'conditional_logic' => [
				[
					[
						'field' => 'stepper_vertical_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		// [
		// 	'key' => 'stepper_image_field',
		// 	'label' => 'Afbeelding',
		// 	'name' => 'stepper_image',
		// 	'type' => 'image',
		// 	'return_format' => 'id'
		// ],
		[
			'key' => 'stepper_vertical_content',
			'label' => 'Content',
			'name' => 'text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
			'default_value' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat. Nisi fugiat consequat pariatur in laboris ut non do in dolor incididunt enim.'
		],

		[
			'key' => 'stepper_vertical_buttons_accordion',
			'label' => 'Knoppen',
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'stepper_vertical_buttons',
			'label' => 'Knoppen',
			'name' => 'stepper_buttons',
			'type' => 'repeater',
			// 'min' => '1',
			'max' => '2',
			'layout' => 'block',
			'sub_fields' => [
				[
					'key' => 'stepper_vertical_button',
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
					'key' => 'stepper_button_style_selector',
					'label' => 'Stijl',
					'name' => 'style',
					'type' => 'select',
					'ui' => true,
					'choices' => [
						'btn--primary' => __('Standaard', 'moonsio'),
						'btn--ghost' => __('Outline', 'moonsio'),
						'btn--black' => __('Zwart', 'moonsio'),
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
			'key' => 'stepper_vertical_steps_accordion',
			'label' => 'Stappen',
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'stepper_vertical_steps',
			'label' => 'Stappen',
			'name' => 'the_steps',
			'type' => 'repeater',
			'min' => '3',
			'layout' => 'row',
			'sub_fields' => [

				[
					'key' => 'step_title',
					'label' => 'Stap titel',
					'name' => 'title',
					'type' => 'text',
					'default_value' => 'Dit is stap 1',
				],

				[
					'key' => 'step_text',
					'label' => 'Stap uitleg',
					'name' => 'text',
					'type' => 'wysiwyg',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => '0',
					'default_value' => 'Pariatur id quis fugiat velit do est deserunt esse incididunt.',
				],
			],
		],

		[
			'key' => 'stepper_vertical_style_accordion',
			'label' => 'Vormgeving',
			'name' => 'accordion_4',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'stepper_vertical_bg_color',
			'label' => __('Achtergrondkleur', 'moonsio'),
			'name' => 'bg_color',
			'type' => 'select',
			'ui' => true,
			'allow_null' => true,
			'choices' => [
				// '' => __('Wit', 'moonsio'),
				'section--light' => __('Licht', 'moonsio'),
				'section--grey' => __('Grijs', 'moonsio')
			],
			'default_value' => '',
		],

		[
			// Don't forget required attributes 'key', 'name' and 'label'
			'key' => 'stepper_vertical_color_picker',
			'label' => __('Kleurtje', 'moonsio'),
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => [
				'width' => '',
				'class' => '',
				'id' => '',
			],
			'default_value' => '',
		],

		[
			'key' => 'stepper_verical_spacing',
			'label' => 'Tussenruimte',
			'name' => 'spacing',
			'type' => 'select',
			'choices' => [
				'section--tight' => __('Klein', 'moonsio'),
				'section--wide' => __('Groot', 'moonsio')
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
			'key' => 'stepper_verical_mirror',
			'label' => __('Content spiegelen?', 'moonsio'),
			'name' => 'content_mirror',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Spiegelen', 'moonsio'),
			'ui_off_text' => __('Standaard', 'moonsio'),
		],

		[
			'key' => 'stepper_verical_align_text',
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
			'key' => 'stepper_verical_align_self',
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
		],

	],
];
