<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
  'key' => 'event_fields',
  'title' => __('Informatie van het evenement', 'moonsio'),
  'location' => [
    [
      [
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'event',
      ],
    ],
  ],

  'fields' => [

    [
      'key' => 'event_location_field',
      'label' => __('Locatie', 'moonsio'),
      'name' => 'event_location',
      'type' => 'text',
      'placeholder' => 'Tilburg',
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_venue_field',
      'label' => __('Theater / zaal', 'moonsio'),
      'name' => 'event_venue',
      'type' => 'text',
      'placeholder' => 'De Schalm',
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_price_field',
      'label' => __('Prijs', 'moonsio'),
      'name' => 'event_price',
      'type' => 'text',
      'placeholder' => '21,50',
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_ticket_link_field',
      'label' => __('Ticket link', 'moonsio'),
      'name' => 'event_ticket_link',
      'type' => 'url',
      'placeholder' => 'https://hetgeheimelevenvangeld.nl/',
      'wrapper' => [
        'width' => '50',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_date_field',
      'label' => __('Datum', 'moonsio'),
      'name' => 'event_date',
      'type' => 'date_picker',
      'instructions' => '',
      'required' => true,
      'conditional_logic' => 0,
      'display_format' => 'd-m-Y',
      'return_format' => 'd-m-Y',
      'first_day' => 1,
      'wrapper' => [
        'width' => '33.3',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_starttime_field',
      'label' => __('Starttijd', 'moonsio'),
      'name' => 'event_starttime',
      'type' => 'time_picker',
      'instructions' => '',
      'required' => 0,
      'display_format' => 'H:i',
      'return_format' => 'H:i',
      'wrapper' => [
        'width' => '33.3',
        'class' => '',
        'id' => '',
      ],
    ],

    [
      'key' => 'event_endtime_field',
      'label' => __('Eindtijd', 'moonsio'),
      'name' => 'event_endtime',
      'type' => 'time_picker',
      'instructions' => '',
      'required' => 0,
      'display_format' => 'H:i',
      'return_format' => 'H:i',
      'wrapper' => [
        'width' => '33.3',
        'class' => '',
        'id' => '',
      ],
    ],

  ]
]);
