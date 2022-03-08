<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Lees meer titel', 'moonsio'),
	'description' => __('Een blok dat twee secties onderbreekt met een opvallende titel.', 'moonsio'),
	'category' => 'moonsio',
	'icon' => '<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><g><path d="m7.5 38.5h497v435h-497z" fill="#fff6cc"/><path d="m464.5 38.5h40v435h-40z" fill="#fff1b5"/><path d="m7.5 38.5h497v57.167h-497z" fill="#7b7b7f"/><path d="m464.5 38.5h40v57.167h-40z" fill="#6b6b73"/></g><path d="m139.933 208.8h309.531v172.963h-309.531z" fill="#00cfe9"/><g><path d="m63.675 255.878h168.827v168.827h-168.827z" fill="#ff7de9"/><path d="m192.503 255.878h40v168.827h-40z" fill="#ff5ee4"/><g><g><g><circle cx="147.471" cy="342.09" fill="#fd0" r="36.403"/></g></g></g></g></g></g><g><path d="m41.922 59.583c-9.992 0-10.008 15 0 15 9.992 0 10.008-15 0-15z"/><path d="m68.755 59.583c-9.992 0-10.008 15 0 15 9.992 0 10.008-15 0-15z"/><path d="m95.589 59.583c-9.992 0-10.008 15 0 15 9.991 0 10.008-15 0-15z"/><path d="m504.5 31h-497c-4.142 0-7.5 3.358-7.5 7.5v435c0 4.142 3.358 7.5 7.5 7.5h497c4.143 0 7.5-3.358 7.5-7.5v-435c0-4.142-3.357-7.5-7.5-7.5zm-489.5 435v-362.833h338.416c9.697 0 9.697-15 0-15h-338.416v-42.167h482v42.167h-98.44c-9.697 0-9.697 15 0 15h98.44v362.833z"/><path d="m449.465 201.3h-309.531c-4.142 0-7.5 3.358-7.5 7.5v39.578h-68.759c-4.142 0-7.5 3.358-7.5 7.5v92.143c0 11.046 15 10.91 15-.21v-84.433h153.828v153.827h-153.828v-28.296c0-9.697-15-9.697-15 0v35.796c0 4.142 3.358 7.5 7.5 7.5h168.828c4.142 0 7.5-3.358 7.5-7.5v-35.442h209.462c4.143 0 7.5-3.358 7.5-7.5v-172.963c0-4.142-3.358-7.5-7.5-7.5zm-7.5 172.963h-201.962v-118.385c0-4.142-3.358-7.5-7.5-7.5h-85.069v-32.078h294.531z"/><path d="m62.536 163.5h92.971c9.697 0 9.697-15 0-15h-92.971c-9.698 0-9.698 15 0 15z"/><path d="m303.005 163.5h27.502c9.697 0 9.697-15 0-15h-27.502c-9.697 0-9.697 15 0 15z"/><path d="m362.484 163.5h27.501c9.697 0 9.697-15 0-15h-27.501c-9.697 0-9.697 15 0 15z"/><path d="m449.465 148.5h-27.502c-9.697 0-9.697 15 0 15h27.502c9.697 0 9.697-15 0-15z"/><path d="m276 263.664h130c9.697 0 9.697-15 0-15h-130c-9.697 0-9.697 15 0 15z"/><path d="m276 302.782h130c9.697 0 9.697-15 0-15h-130c-9.697 0-9.697 15 0 15z"/><path d="m406 326.9h-75.493c-9.697 0-9.697 15 0 15h75.493c9.697 0 9.697-15 0-15z"/><path d="m84.748 368.779c1.443 3.621 6.159 5.62 9.743 4.191l16.45-6.554c26.478 38.964 86.778 14.901 79.797-31.794l16.501-6.575c9.009-3.589 3.457-17.522-5.552-13.935l-16.004 6.377c-25.865-43.651-91.965-17.823-80.82 32.202l-15.923 6.344c-3.849 1.534-5.725 5.897-4.192 9.744zm91.626-26.69c-.114 27.016-33.879 39.012-51.022 18.585l50.971-20.309c.033.571.051 1.146.051 1.724zm-57.806 0c.242-28.721 37.253-39.51 52.983-15.969l-52.555 20.94c-.281-1.615-.428-3.276-.428-4.971z"/></g></g></svg>', // nog te wijzigen
	'post_types' => [],

	'fields' => [

		[
			'key' => 'readmore_content_accordion',
			'label' => __('Content blok inhoud', 'moonsio'),
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => true,
		],



		[
			'key' => 'readmore_enable_duo_heading',
			'label' => __('Geavanceerde titel gebruiken?', 'moonsio'),
			'name' => 'enable_duo_heading',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'readmore_title',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Titel van je blok',
			'conditional_logic' => [
				[
					[
						'field' => 'readmore_enable_duo_heading',
						'operator' => '==',
						'value' => '0',
					],
				],
			],
		],

		[
			'key' => 'readmore_title_pre',
			'label' => __('Voor titel', 'moonsio'),
			'name' => 'title_pre',
			'type' => 'text',
			'default_value' => 'Deze',
			'conditional_logic' => [
				[
					[
						'field' => 'readmore_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'readmore_title_main',
			'label' => __('Titel', 'moonsio'),
			'name' => 'title_main',
			'type' => 'text',
			'default_value' => 'title is',
			'conditional_logic' => [
				[
					[
						'field' => 'readmore_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'readmore_title_after',
			'label' => __('Na titel', 'moonsio'),
			'name' => 'title_after',
			'type' => 'text',
			'default_value' => 'geavanceerd',
			'conditional_logic' => [
				[
					[
						'field' => 'readmore_enable_duo_heading',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'readmore_text',
			'label' => __('Tekst', 'moonsio'),
			'name' => 'content_text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
			'default_value' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat. Nisi fugiat consequat pariatur in laboris ut non do in dolor incididunt enim.'
		],

		[
			'key' => 'readmore_img_bg',
			'label' => __('Achtergrond afbeelding gebruiken?', 'moonsio'),
			'name' => 'img_bg',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio'),
		],

		[
			'key' => 'readmore_image',
			'label' => __('Afbeelding', 'moonsio'),
			'name' => 'content_image',
			'type' => 'image',
			'return_format' => 'id',
			'conditional_logic' => [
				[
					[
						'field' => 'readmore_img_bg',
						'operator' => '==',
						'value' => '1',
					],
				],
			],
		],

		[
			'key' => 'readmore_styling_accordion',
			'label' => __('Vormgeving', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'readmore_bg_color',
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
			'key' => 'readmore_spacing',
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
			'key' => 'readmore_boxed_toggle',
			'label' => __('Content in een box weergeven?', 'moonsio'),
			'name' => 'boxed_toggle',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio'),
		],

		// [
		// 	'key' => 'readmore_boxed_bg',
		// 	'label' => __('Achtergrondkleur box', 'moonsio'),
		// 	'name' => 'boxed_bg',
		// 	'type' => 'select',
		// 	'choices' => [
		// 		'bg--primary' => __('Accentkleur 1', 'moonsio'),
		// 		'bg--secondary' => __('Accentkleur 2', 'moonsio'),
		// 		'bg--grey' => __('Grijs', 'moonsio'),
		// 		'bg--light' => __('Licht', 'moonsio'),
		// 	],
		// 	'allow_null' => true,
		// ],
	],
];
