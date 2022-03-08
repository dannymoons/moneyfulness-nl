<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
  'key' => 'popup_fields',
  'title' => __('Popup data', 'moonsio'),
  'location' => [
    [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'popup',
      ],
    ],
  ],

  'fields' => [

    [
      'key' => 'popup_type_field',
      'label' => __('Popup type', 'moonsio'),
      'name' => 'popup_type',
      'type' => 'select',
      'ui' => true,

      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'popup_style_field',
      'label' => __('Popup stijl', 'moonsio'),
      'name' => 'popup_style',
      'type' => 'select',
      'choices' => [
        'regular' => __('Standaard', 'moonsio')
      ],
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'popup_size_field',
      'label' => __('Popup grootte', 'moonsio'),
      'name' => 'popup_style',
      'type' => 'select',
      'choices' => [
        'small' => __('Klein', 'moonsio'),
        'medium' => __('Normaal', 'moonsio'),
        'large' => __('Groot', 'moonsio'),
        'full_page' => __('Volledig scherm', 'moonsio'),

      ],
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],
  ],
]);
