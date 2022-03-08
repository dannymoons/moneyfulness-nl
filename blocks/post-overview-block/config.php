<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Berichten', 'moonsio'),
	'description' => __('Kies een berichttype en laat berichten zien.', 'moonsio'),
	'category' => 'moonsio',
	'icon' => 'id',
	'post_types' => [],

	'fields' => [


		[
			'key' => 'posts_contents_accordion',
			'label' => 'Inhoud berichten blok',
			'name' => 'accordion_1',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'posts_title',
			'label' => 'Titel',
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Dit is de titel',
			'wrapper' => [
				'width' => '66.7',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_title_format',
			'label' => __('Sectie titel of paginatitel?', 'moonsio'),
			'name' => 'title_format',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				'section' => __('Sectie titel', 'moonsio'),
				'page' => __('Pagina titel', 'moonsio'),
			],
			'default_value' => 'section',
			'wrapper' => [
				'width' => '33.3',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'show_posts_text',
			'label' => __('Tekst laten zien?', 'moonsio'),
			'name' => 'show_text',
			'type' => 'true_false',
			'ui' => true,
			'ui_on_text' => __('Ja', 'moonsio'),
			'ui_off_text' => __('Nee', 'moonsio')
		],

		[
			'key' => 'posts_text',
			'label' => 'Tekst',
			'name' => 'text',
			'type' => 'text',
			'type' => 'wysiwyg',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => '0',
		],

		[
			'key' => 'posts_buttons_accordion',
			'label' => 'Knoppen',
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'posts_buttons',
			'label' => __('Knoppen', 'moonsio'),
			'name' => 'buttons',
			'type' => 'repeater',
			'max' => '2',
			'layout' => 'block',
			'sub_fields' => [
				[
					'key' => 'posts_button',
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
					'key' => 'posts_button_style',
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
			'key' => 'posts_options_accordion',
			'label' => 'Opties',
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'posts_type',
			'label' => __('Bericht type', 'moonsio'),
			'name' => 'post_type',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				// 'any' => __('Alle types', 'moonsio'),
				'blog' => __('Blog', 'moonsio'),
				'kennisbank' => __('Kennisbank', 'moonsio'),
				'project' => __('Projecten', 'moonsio'),
			],
			'default_value' => 'date',
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_count',
			'label' => __('Aantal berichten', 'moonsio'),
			'name' => 'count',
			'type' => 'number',
			'default_value' => '0',
		],

		[
			'key' => 'posts_offset',
			'label' => __('Berichten overslaan', 'moonsio'),
			'name' => 'offset',
			'type' => 'number',
			'default_value' => '-1',
		],

		// [
		// 	'key' => 'show_posts_pagination',
		// 	'label' => __('Paginering gebruiken?', 'moonsio'),
		// 	'name' => 'show_pagination',
		// 	'type' => 'true_false',
		// ],

		[
			'key' => 'posts_posts',
			'label' => __('Berichten selecteren', 'moonsio'),
			'instructions' => __('Als hier berichten ingevuld zijn, dan worden alleen die getoond. Als hier niks ingevuld is, dan worden standaard alle berichten getoond.', 'moonsio'),
			'name' => 'posts',
			'type' => 'post_object',
			'post_type' => [
				'kennisbank',
				'blog',
			],
			'multiple' => true,
			'return_format' => 'id',
			'ui' => true,
		],

		[
			'key' => 'posts_order_by',
			'label' => __('Berichten sorteren op basis van:', 'moonsio'),
			'name' => 'order_by',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				'date' => __('Datum', 'moonsio'),
				'title' => __('Naam auteur', 'moonsio'),
				'rand' => __('Willekeurig', 'moonsio'),
			],
			'default_value' => 'date',
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_order',
			'label' => __('Volgorde', 'moonsio'),
			'name' => 'order',
			'type' => 'select',
			'ui' => true,
			'choices' => [
				'ASC' => __('A - Z | Oplopend', 'moonsio'),
				'DESC' => __('Z - A | Aflopend', 'moonsio'),
			],
			'default_value' => 'DESC',
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_style_accordion',
			'label' => 'Vormgeving',
			'name' => 'accordion_4',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'posts_layout',
			'label' => __('Kies je layout', 'moonsio'),
			'name' => 'layout',
			'type' => 'select',
			'choices' => [
				'layout_1' => __('Layout 1', 'moonsio'),
				'layout_2' => __('Layout 2', 'moonsio'),
			],
			'default_value' => __('layout_1', 'moonsio'),
			'ui' => true,
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_content_align_self',
			'label' => __('Content kolom uitlijnen', 'moonsio'),
			'name' => 'align_content',
			'type' => 'select',
			'choices' => [
				// '' => __('Layout 1', 'moonsio'),
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

		[
			'key' => 'posts_bg_color',
			'label' => __('Achtergrondkleur', 'moonsio'),
			'name' => 'bg_color',
			'type' => 'select',
			'ui' => true,
			'allow_null' => true,
			'choices' => [
				'section--light' => __('Licht', 'moonsio'),
				'section--grey' => __('Grijs', 'moonsio')
			],
			'default_value' => '',
			'wrapper' => [
				'width' => '50',
				'class' => '',
				'id' => '',
			],
		],

		[
			'key' => 'posts_style',
			'label' => __('Stijl van de berichten', 'moonsio'),
			'name' => 'style',
			'type' => 'select',
			'choices' => [
				'card--overlay' => __('Achtergrond', 'moonsio'),
				'card--cascade' => __('Overlappend', 'moonsio'),
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
