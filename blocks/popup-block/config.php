<?php defined('ABSPATH') || exit('Forbidden');

return [
	'title' => __('Popup', 'moonsio'),
	'description' => __('Kies een berichttype en laat berichten zien.', 'moonsio'),
	'category' => 'moonsio',
	'icon' => 'id',
	'post_types' => [],

	'fields' => [

		[
			'key' => 'popup_data_popup',
			'label' => __('Berichten selecteren', 'moonsio'),
			'instructions' => __('Als hier berichten ingevuld zijn, dan worden alleen die getoond. Als hier niks ingevuld is, dan worden standaard alle berichten getoond.', 'moonsio'),
			'name' => 'data_popup',
			'type' => 'post_object',
			'post_type' => [
				'popup',
			],
			'multiple' => false,
			'return_format' => 'id',
			'ui' => true,
		],

	],
];
