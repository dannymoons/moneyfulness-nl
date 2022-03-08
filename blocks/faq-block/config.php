<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Veelgestelde vragen', 'moonsio'),
	'description' => __('Sectie waarin je veelgestelde vragen kunt beantwoorden', 'moonsio'),
	'category' => 'moonsio',
	'icon' => '<svg enable-background="new 0 0 256 256" height="512" viewBox="0 0 256 256" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m194.613 10.335h-168.654c-12.901 0-23.456 10.555-23.456 23.456v123.146c0 12.901 10.555 23.456 23.456 23.456h4.389c4.188 0 7.584 3.395 7.584 7.584v21.638c0 4.809 5.864 7.162 9.188 3.687l29.238-30.567c1.431-1.496 3.411-2.342 5.48-2.342h112.775c12.901 0 23.456-10.555 23.456-23.456v-123.146c0-12.901-10.555-23.456-23.456-23.456z" fill="#1387ce"/><g fill="#edf4fc"><path d="m230.041 41.04h-11.973v115.898c0 12.901-10.555 23.456-23.456 23.456h-112.774c-2.07 0-4.05.846-5.48 2.342l-20.115 21.029c4.28 4.498 10.293 7.334 16.954 7.334h100.965c2.07 0 4.05.846 5.48 2.342l29.238 30.567c3.324 3.475 9.188 1.122 9.188-3.687v-21.638c0-4.188 3.395-7.584 7.584-7.584h4.389c12.901 0 23.456-10.555 23.456-23.456v-123.147c.001-12.901-10.555-23.456-23.456-23.456z"/><path d="m68.855 77.739c1.503 0 2.721-1.218 2.721-2.721v-5.743c0-1.503-1.218-2.721-2.721-2.721h-30.97c-1.503 0-2.721 1.218-2.721 2.721v54.722c0 1.503 1.218 2.721 2.721 2.721h7.064c1.503 0 2.721-1.218 2.721-2.721v-21.807h17.537c1.503 0 2.721-1.218 2.721-2.721v-5.512c0-1.503-1.218-2.721-2.721-2.721h-17.538v-13.497z"/><path d="m103.847 69.327c-.399-1.062-1.414-1.765-2.547-1.765h-7.995c-1.133 0-2.147.702-2.546 1.761l-20.259 53.713c-.315.836-.2 1.773.308 2.508s1.345 1.174 2.238 1.174h7.607c1.146 0 2.169-.718 2.559-1.795l3.93-10.856h20.244l3.93 10.856c.39 1.078 1.413 1.795 2.559 1.795h7.607c.893 0 1.729-.438 2.237-1.172.509-.733.625-1.67.31-2.505zm-.451 33.785h-12.265l6.133-16.924z"/><path d="m183.438 132.664-11.739-11.227c3.131-2.367 5.701-5.377 7.667-8.983 2.538-4.653 3.826-9.988 3.826-15.857 0-5.817-1.287-11.126-3.825-15.78-2.557-4.687-6.123-8.393-10.6-11.019-4.469-2.617-9.541-3.944-15.075-3.944-5.53 0-10.624 1.324-15.14 3.936-4.534 2.625-8.13 6.334-10.69 11.026-2.538 4.655-3.825 9.965-3.825 15.78 0 5.817 1.287 11.125 3.825 15.779 2.561 4.695 6.158 8.405 10.69 11.026 4.512 2.612 9.606 3.936 15.14 3.936 2.383 0 4.757-.266 7.078-.79l9.929 10c.511.514 1.206.804 1.931.804h8.926c1.112 0 2.111-.676 2.526-1.708.415-1.03.16-2.21-.644-2.979zm-46.662-36.067c0-3.886.745-7.289 2.215-10.117 1.452-2.792 3.396-4.872 5.941-6.356 2.578-1.501 5.443-2.23 8.76-2.23 3.264 0 6.104.729 8.681 2.23 2.545 1.484 4.489 3.563 5.941 6.355 1.471 2.831 2.216 6.234 2.216 10.118 0 3.833-.745 7.21-2.215 10.038-1.456 2.8-3.405 4.895-5.957 6.403-2.572 1.521-5.407 2.26-8.667 2.26-3.321 0-6.186-.729-8.76-2.23-2.543-1.481-4.485-3.57-5.937-6.385v-.001c-1.471-2.855-2.218-6.248-2.218-10.085z"/></g><path d="m43.279 217.456c-.983 0-1.976-.187-2.931-.569-2.987-1.199-4.917-4.053-4.917-7.271v-21.638c0-2.804-2.281-5.084-5.084-5.084h-4.389c-14.312 0-25.957-11.644-25.957-25.956v-123.147c0-14.312 11.644-25.956 25.957-25.956h168.654c14.312 0 25.957 11.644 25.957 25.956v123.146c0 14.312-11.645 25.956-25.957 25.956h-112.774c-1.381 0-2.72.572-3.674 1.569l-29.238 30.568c-1.513 1.582-3.555 2.425-5.647 2.426zm-17.321-204.621c-11.556 0-20.957 9.4-20.957 20.956v123.146c0 11.556 9.401 20.956 20.957 20.956h4.389c5.561 0 10.084 4.523 10.084 10.084v21.638c0 1.778 1.361 2.463 1.779 2.631.417.167 1.873.613 3.103-.671l29.238-30.568c1.892-1.979 4.548-3.113 7.287-3.113h112.774c11.556 0 20.957-9.4 20.957-20.956v-123.147c0-11.556-9.401-20.956-20.957-20.956z"/><path d="m212.721 248.161c-2.092 0-4.134-.843-5.646-2.426l-29.238-30.566c-.954-.998-2.293-1.57-3.674-1.57h-100.966c-7.124 0-13.789-2.881-18.766-8.11-.92-.968-.918-2.487.004-3.452l20.115-21.029c1.892-1.979 4.548-3.113 7.287-3.113h112.774c11.556 0 20.957-9.4 20.957-20.956v-115.899c0-1.381 1.119-2.5 2.5-2.5h11.972c14.312 0 25.957 11.644 25.957 25.956v123.146c0 14.312-11.645 25.956-25.957 25.956h-4.389c-2.803 0-5.083 2.28-5.083 5.084v21.639c0 3.218-1.93 6.071-4.917 7.271-.954.383-1.947.569-2.93.569zm-152.934-44.485c3.775 3.19 8.458 4.923 13.41 4.923h100.965c2.738 0 5.395 1.135 7.287 3.114l29.238 30.566c1.23 1.285 2.685.838 3.104.672.417-.168 1.778-.852 1.778-2.63v-21.639c0-5.561 4.523-10.084 10.083-10.084h4.389c11.556 0 20.957-9.4 20.957-20.956v-123.146c0-11.556-9.401-20.956-20.957-20.956h-9.472v113.397c0 14.312-11.645 25.956-25.957 25.956h-112.774c-1.381 0-2.72.572-3.674 1.569z"/><path d="m44.948 129.218h-7.064c-2.879 0-5.221-2.342-5.221-5.221v-54.723c0-2.879 2.342-5.221 5.221-5.221h30.971c2.879 0 5.221 2.342 5.221 5.221v5.743c0 2.879-2.342 5.222-5.221 5.222h-18.686v8.497h15.037c2.879 0 5.221 2.342 5.221 5.221v5.512c0 2.879-2.342 5.222-5.221 5.222h-15.037v19.307c0 2.878-2.342 5.22-5.221 5.22zm-7.064-60.164c-.122 0-.221.099-.221.221v54.723c0 .122.099.221.221.221h7.064c.122 0 .221-.099.221-.221v-21.808c0-1.381 1.119-2.5 2.5-2.5h17.537c.122 0 .221-.1.221-.222v-5.512c0-.122-.099-.221-.221-.221h-17.537c-1.381 0-2.5-1.119-2.5-2.5v-13.496c0-1.381 1.119-2.5 2.5-2.5h21.186c.122 0 .221-.1.221-.222v-5.743c0-.122-.099-.221-.221-.221h-30.971z"/><path d="m121.48 129.218h-7.606c-2.192 0-4.166-1.385-4.91-3.445l-3.333-9.206h-16.736l-3.333 9.207c-.744 2.06-2.717 3.444-4.909 3.444h-7.606c-1.714 0-3.32-.842-4.295-2.252-.975-1.409-1.196-3.208-.59-4.812l20.258-53.712c.763-2.021 2.726-3.379 4.886-3.379h7.996c2.164 0 4.127 1.36 4.888 3.386l20.181 53.713c.603 1.603.38 3.4-.596 4.809-.976 1.406-2.581 2.247-4.295 2.247zm-34.339-17.652h20.244c1.053 0 1.992.659 2.351 1.649l3.93 10.856c.032.088.115.146.208.146h7.606c.073 0 .141-.035.182-.095.042-.061.051-.136.026-.203l-20.182-53.714v-.001c-.032-.085-.115-.143-.207-.143h-7.996c-.092 0-.175.058-.208.144l-20.258 53.713c-.026.068-.017.144.024.202.042.061.11.097.183.097h7.606c.093 0 .176-.058.208-.145l3.931-10.857c.36-.989 1.299-1.649 2.352-1.649zm16.255-5.954h-12.266c-.815 0-1.579-.397-2.047-1.064-.468-.668-.581-1.521-.304-2.287l6.133-16.925c.359-.989 1.298-1.648 2.351-1.648 1.052 0 1.992.659 2.351 1.648l6.132 16.925c.277.767.164 1.62-.304 2.287s-1.231 1.064-2.046 1.064zm-8.701-5h5.136l-2.567-7.087z"/><path d="m181.558 139.853h-8.926c-1.383 0-2.733-.562-3.706-1.543l-8.978-9.041c-2.063.379-4.161.57-6.256.57-5.979 0-11.495-1.438-16.394-4.272-4.934-2.854-8.848-6.89-11.632-11.993-2.741-5.024-4.13-10.735-4.13-16.977 0-6.239 1.39-11.951 4.13-16.978 2.784-5.101 6.697-9.136 11.632-11.992 4.905-2.836 10.42-4.273 16.394-4.273 5.984 0 11.481 1.442 16.339 4.287 4.875 2.858 8.755 6.888 11.531 11.979 2.74 5.027 4.13 10.739 4.13 16.978 0 6.292-1.39 12.029-4.131 17.054-1.646 3.02-3.697 5.67-6.118 7.908l9.722 9.299c1.552 1.483 2.037 3.729 1.237 5.719-.798 1.987-2.7 3.275-4.844 3.275zm-20.787-15.804c.658 0 1.3.261 1.774.738l9.93 10c.041.042.098.065.157.065h8.926c.091 0 .171-.055.205-.14.033-.083.012-.18-.053-.242l-11.739-11.228c-.529-.507-.81-1.22-.768-1.951.043-.731.404-1.407.988-1.85 2.843-2.149 5.191-4.903 6.98-8.186 2.336-4.282 3.521-9.214 3.521-14.66 0-5.394-1.184-10.3-3.52-14.584-2.336-4.281-5.589-7.666-9.67-10.059-4.079-2.389-8.727-3.601-13.811-3.601s-9.757 1.212-13.89 3.601c-4.129 2.391-7.408 5.775-9.746 10.06-2.336 4.283-3.52 9.189-3.52 14.583 0 5.395 1.184 10.301 3.52 14.582 2.338 4.287 5.617 7.672 9.747 10.06 4.127 2.39 8.8 3.601 13.889 3.601 2.191 0 4.388-.245 6.527-.729.184-.04.369-.06.553-.06zm-7.079-6.251c-3.775 0-7.053-.841-10.02-2.569-2.966-1.729-5.223-4.149-6.899-7.399-1.657-3.214-2.498-6.993-2.498-11.232 0-4.292.841-8.084 2.498-11.27 1.677-3.226 3.934-5.633 6.899-7.362 2.972-1.729 6.248-2.57 10.02-2.57 3.718 0 6.969.841 9.939 2.57 2.967 1.729 5.224 4.138 6.9 7.361 1.658 3.188 2.499 6.98 2.499 11.271 0 4.24-.841 8.006-2.498 11.191-1.679 3.229-3.938 5.65-6.903 7.402-2.965 1.753-6.216 2.607-9.937 2.607zm0-37.403c-2.863 0-5.317.618-7.503 1.891-2.123 1.238-3.753 2.987-4.98 5.349-1.283 2.467-1.934 5.482-1.934 8.963 0 3.435.653 6.441 1.941 8.938 1.228 2.381 2.854 4.138 4.974 5.373 2.182 1.271 4.635 1.89 7.502 1.89 2.801 0 5.219-.625 7.394-1.911 2.138-1.264 3.776-3.031 5.012-5.405 1.283-2.467 1.934-5.456 1.934-8.885 0-3.479-.651-6.495-1.935-8.964-1.228-2.359-2.857-4.109-4.982-5.349-2.184-1.272-4.613-1.89-7.423-1.89z"/></svg>',
	'post_types' => [],

	'fields' => [

		[
			'key' => 'faq_block_title',
			'label' => 'Sectie titel',
			'name' => 'title',
			'type' => 'text',
			'default_value' => 'Veelgestelde vragen'
		],
		[
			'key' => 'faq_block_repeater_accordion',
			'label' => __('Blokken', 'moonsio'),
			'name' => 'accordion_2',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],
		[
			'key' => 'faq_block_repeater',
			// 'label' => 'Blokken',
			'name' => 'faq_repeater',
			'type' => 'repeater',
			'layout' => 'block',
			'sub_fields' => [

				[
					'key' => 'faq_block_faqs_accordion',
					'label' => 'Veelgestelde vraag',
					'name' => 'accordion_1',
					'type' => 'accordion',
					'multi_expand' => false,
					'open' => false,
				],

				// [
				// 	'key' => 'card_1_style',
				// 	'label' => 'Blok stijl',
				// 	'name' => 'card_style',
				// 	'type' => 'select',
				// 	'choices' => [
				// 		'card--cascade' => __('Overlappend', 'moonsio'),
				// 		'card--overlay' => __('Achtergrond', 'moonsio'),
				// 	],
				// 	'ui' => true,
				// 	'allow_null' => true,
				// ],

				[
					'key' => 'faq_title',
					'label' => 'Vraag',
					'name' => 'title',
					'type' => 'text',
					'default_value' => 'Dit is de titel'
				],

				[
					'key' => 'faq_text',
					'label' => 'Antwoord',
					'name' => 'text',
					'type' => 'wysiwyg',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => '0',
					'default_value' => 'Pariatur id quis fugiat velit do est deserunt esse incididunt.'
				],

				// [
				// 	'key' => 'card_1_image',
				// 	'label' => 'Blok afbeelding',
				// 	'name' => 'card_image',
				// 	'type' => 'image',
				// 	'return_format' => 'id'
				// ],

			],
		],

		[
			'key' => 'faq_block_styling_accordion',
			'label' => __('Vormgeving', 'moonsio'),
			'name' => 'accordion_3',
			'type' => 'accordion',
			'multi_expand' => false,
			'open' => false,
		],

		[
			'key' => 'faq_block_bg_color',
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
			'key' => 'faq_block_padding_top',
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
			'key' => 'faq_block_padding_bottom',
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