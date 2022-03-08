<?php defined('ABSPATH') || exit('Forbidden');

acf_add_options_page([
  'page_title' => __('Thema Opties', 'moonsio'),
  'menu_title' => __('Thema Opties', 'moonsio'),
  'menu_slug' => 'theme_settings',
  'capability' => 'edit_posts',
  'icon_url' => 'dashicons-welcome-view-site'
]);

acf_add_local_field_group([
  'key' => 'theme_options_fields',
  'title' => __('Thema Opties', 'moonsio'),
  'location' => [
    [
      [
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'theme_settings',
      ],
    ],
  ],
  'fields' => [

    [
      'key' => 'theme_options_tab_company_details_field',
      'label' => __('Bedrijfsgegevens', 'moonsio'),
      'type' => 'tab'
    ],

    [
      'key' => 'company_name_field',
      'label' => __('Bedrijfsnaam', 'moonsio'),
      'name' => 'company_name',
      'type' => 'text'
    ],

    [
      'key' => 'company_address_field',
      'label' => __('Adres', 'moonsio'),
      'name' => 'company_address',
      'type' => 'text',
      'instructions' => '(Straatnaam, straatnummer, etage)'
    ],

    [
      'key' => 'company_zipcode_field',
      'label' => __('Postcode', 'moonsio'),
      'name' => 'company_zipcode',
      'type' => 'text'
    ],

    [
      'key' => 'company_place_field',
      'label' => __('Plaats', 'moonsio'),
      'name' => 'company_place',
      'type' => 'text'
    ],

    [
      'key' => 'company_email_field',
      'label' => __('E-mail Adres', 'moonsio'),
      'name' => 'company_email',
      'type' => 'text'
    ],

    [
      'key' => 'company_telephone_field',
      'label' => __('Telefoonnummer', 'moonsio'),
      'name' => 'company_telephone',
      'type' => 'text'
    ],

    [
      'key' => 'theme_options_tab_opening_times_field',
      'label' => __('Openingstijden', 'moonsio'),
      'type' => 'tab'
    ],

    [
      'key' => 'openingtimes_repeater_field',
      'name' => 'openingtimes_repeater',
      'type' => 'repeater',
      'min' => '1',
      'layout' => 'block',
      'sub_fields' => [

        [
          'key' => 'openingtimes_days_field',
          'label' => __('Dag(en)', 'moonsio'),
          'name' => 'openingtimes_days',
          'type' => 'select',
          'ui' => 1,
          'choices' => [
            'Werkdagen' => __('Werkdagen', 'moonsio'),
            'Maandag' => __('Maandag', 'moonsio'),
            'Dinsdag' => __('Dinsdag', 'moonsio'),
            'Woensdag' => __('Woensdag', 'moonsio'),
            'Donderdag' => __('Donderdag', 'moonsio'),
            'Vrijdag' => __('Vrijdag', 'moonsio'),
            'Zaterdag' => __('Zaterdag', 'moonsio'),
            'Zondag' => __('Zondag', 'moonsio'),
            'Weekenden' => __('Weekenden', 'moonsio'),
          ],
          'wrapper' => [
            'width' => '33.3',
            'class' => 'dm-acf-col-4',
            'id' => '',
          ],
        ],

        [
          'key' => 'openingtime_field',
          'label' => __('Tijd Open', 'moonsio'),
          'name' => 'openingtime',
          'type' => 'time_picker',
          'required' => 1,
          'display_format' => 'H:i',
          'return_format' => 'H:i',
          'wrapper' => [
            'width' => '33.3',
            'class' => 'dm-acf-col-4',
            'id' => '',
          ],
        ],

        [
          'key' => 'closingtime_field',
          'label' => __('Tijd Gesloten', 'moonsio'),
          'name' => 'closingtime',
          'type' => 'time_picker',
          'required' => 1,
          'display_format' => 'H:i',
          'return_format' => 'H:i',
          'wrapper' => [
            'width' => '33.3',
            'class' => 'dm-acf-col-4',
            'id' => '',
          ],
        ]

      ]
    ],

    [
      'key' => 'theme_options_tab_social_media_field',
      'label' => __('Social Media', 'moonsio'),
      'type' => 'tab'
    ],

    [
      'key' => 'socialmedia_repeater_field',
      'name' => 'socialmedia_repeater',
      'type' => 'repeater',
      'layout' => 'block',
      'sub_fields' => [

        [
          'key' => 'socialmedia_name_field',
          'label' => __('Social Media Name', 'moonsio'),
          'name' => 'socialmedia_name',
          'type' => 'select',
          'ui' => 1,
          'choices' => [
            'Facebook' => __('Facebook', 'moonsio'),
            'Instagram' => __('Instagram', 'moonsio'),
            'Linkedin' => __('Linkedin', 'moonsio'),
            'Snapchat' => __('Snapchat', 'moonsio'),
            'TikTok' => __('TikTok', 'moonsio'),
            'Twitter' => __('Twitter', 'moonsio'),
            'YouTube' => __('YouTube', 'moonsio'),
            'Vimeo' => __('Vimeo', 'moonsio'),
          ],
          'wrapper' => [
            'width' => '50',
            'class' => 'dm-acf-col-6',
            'id' => '',
          ],
        ],

        [
          'key' => 'socialmedia_url_field',
          'label' => __('Social Media Link', 'moonsio'),
          'name' => 'socialmedia_url',
          'type' => 'text',
          'wrapper' => [
            'width' => '50',
            'class' => 'dm-acf-col-6',
            'id' => '',
          ],
        ]

      ]
    ]
  ]
]);
