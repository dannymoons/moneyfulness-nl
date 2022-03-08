<?php defined('ABSPATH') || exit('Forbidden');

acf_add_options_page([
  'page_title' => __('Instellingen', 'moonsio'),
  'menu_title' => __('Instellingen', 'moonsio'),
  'menu_slug' => 'knowledge_settings',
  'parent_slug' => 'edit.php?post_type=kennisbank'
]);

acf_add_local_field_group([
  'key' => 'kbsettings',
  'title' => __('Instellingen', 'moonsio'),
  'location' => [
    [
      [
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'knowledge_settings',
      ],
    ],
  ],
  'fields' => [

    [
      'key' => 'knowledge_base_name_field',
      'label' => __('Naam van je kennisbank', 'moonsio'),
      'name' => 'knowledge_base_name',
      'type' => 'text',
      'default_value' => 'Kennisbank'
    ],

    [
      'key' => 'knowledge_base_url_field',
      'label' => __('Link van je kennisbank', 'moonsio'),
      'name' => 'knowledge_base_url',
      'type' => 'text',
      'default_value' => 'kennisbank'
    ]

  ]
]);
