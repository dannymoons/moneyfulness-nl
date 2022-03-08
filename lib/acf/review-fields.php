<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
  'key' => 'review_fields',
  'title' => __('Review inhoud', 'moonsio'),
  'location' => [
    [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'review',
      ],
    ],
  ],

  'fields' => [

    [
      'key' => 'review_author_field',
      'label' => __('Auteur', 'moonsio'),
      'name' => 'review_author',
      'type' => 'text',
      'placeholder' => 'John Doe',
    ],

    [
      'key' => 'review_image_field',
      'label' => 'Afbeelding',
      'name' => 'revie_image',
      'type' => 'image',
      'return_format' => 'id'
    ],

    [
      'key' => 'review_company_field',
      'label' => __('Bedrijfsnaam', 'moonsio'),
      'name' => 'review_company',
      'type' => 'text',
      'placeholder' => 'Bedrijfsnaam',
    ],

    [
      'key' => 'review_function_field',
      'label' => __('Functie', 'moonsio'),
      'name' => 'review_function',
      'type' => 'text',
      'placeholder' => 'Functie titel',
    ],

    [
      'key' => 'review_title_field',
      'label' => __('Review titel', 'moonsio'),
      'name' => 'review_title',
      'type' => 'text',
      'placeholder' => 'Title van de review',
    ],
    [
      // aantal sterren
    ],

    [
      'key' => 'review_text_field',
      'label' => __('Review tekst', 'moonsio'),
      'name' => 'review_text',
      'type' => 'textarea',
      'placeholder' => 'Consequat quis Lorem elit officia. Ad exercitation ad aliquip aliqua non enim enim nisi pariatur elit occaecat.'
    ],
  ]
]);
