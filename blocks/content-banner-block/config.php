<?php defined('ABSPATH') || exit('Forbidden');

return [
    'title' => __('Banner content', 'moonsio'),
    'description' => __('Een opvallende sectie om content uit te lichten met een achtergrond afbeelding', 'moonsio'),
    'category' => 'moonsio',
    'icon' => '<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m479.5 473.438h-447c-13.807 0-25-11.193-25-25v-384.876c0-13.807 11.193-25 25-25h447c13.807 0 25 11.193 25 25v384.875c0 13.808-11.193 25.001-25 25.001z" fill="#b2e5fb"/></g><g><path d="m468.098 38.562h-43.682c20.104 0 36.401 16.298 36.401 36.401v362.073c0 20.104-16.297 36.401-36.401 36.401h43.682c20.104 0 36.401-16.297 36.401-36.401v-362.072c.001-20.104-16.297-36.402-36.401-36.402z" fill="#91dafa"/></g><g><path d="m7.5 370.692v66.344c0 20.104 16.298 36.401 36.401 36.401h250.153l-194.65-194.65z" fill="#f8e883"/></g><g><path d="m99.404 278.788-21.841 21.841 172.809 172.809h43.682z" fill="#ffd549"/></g><g><path d="m504.5 437.036v-119.654l-125.997-125.997-282.052 282.053h371.647c20.104 0 36.402-16.298 36.402-36.402z" fill="#ea7b45"/></g><g><path d="m378.503 191.385-21.841 21.841 104.156 104.156v119.654c0 20.104-16.297 36.401-36.401 36.401h43.682c20.104 0 36.401-16.297 36.401-36.401v-119.654z" fill="#e76833"/></g><g><circle cx="203.531" cy="172.072" fill="#f8e883" r="54.056"/></g><g><path d="m203.531 118.016c-7.775 0-15.16 1.654-21.841 4.61 18.971 8.392 32.215 27.367 32.215 49.446s-13.244 41.054-32.215 49.446c6.681 2.955 14.066 4.61 21.841 4.61 29.854 0 54.056-24.202 54.056-54.056s-24.202-54.056-54.056-54.056z" fill="#ffd549"/></g><g><path d="m265.087 172.072c0-33.942-27.614-61.556-61.556-61.556s-61.556 27.614-61.556 61.556 27.614 61.556 61.556 61.556 61.556-27.614 61.556-61.556zm-108.112 0c0-25.671 20.885-46.556 46.556-46.556s46.556 20.885 46.556 46.556-20.885 46.556-46.556 46.556-46.556-20.885-46.556-46.556z"/><path d="m512 63.562c0-17.92-14.58-32.5-32.5-32.5h-365.591c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h365.591c9.649 0 17.5 7.851 17.5 17.5v235.713l-113.193-113.194c-1.406-1.407-3.314-2.197-5.303-2.197s-3.897.79-5.303 2.197l-177.949 177.948-90.545-90.545c-2.929-2.929-7.678-2.929-10.606 0l-79.101 79.101v-289.023c0-9.649 7.851-17.5 17.5-17.5h51.409c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-51.409c-17.92 0-32.5 14.58-32.5 32.5v384.875c0 17.92 14.58 32.5 32.5 32.5h294.163c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-212.106l263.946-263.946 118.497 118.497v127.949c0 9.649-7.851 17.5-17.5 17.5h-122.837c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h122.837c17.92 0 32.5-14.58 32.5-32.5zm-479.5 402.376c-9.649 0-17.5-7.851-17.5-17.5v-74.639l84.404-84.404 85.242 85.242-91.302 91.302h-60.844z"/></g></g></svg>',
    'post_types' => [],

    'fields' => [

        [
            'key' => 'banner_1_accordion_content',
            'label' => 'Inhoud banner content',
            'name' => 'accordion_1',
            'type' => 'accordion',
            'multi_expand' => true,
            'open' => true,
        ],

        [
            'key' => 'banner_1_title',
            'label' => 'Banner titel',
            'name' => 'banner_title',
            'type' => 'text',
            'default_value' => 'Titel'
        ],

        [
            'key' => 'banner_1_text',
            'label' => 'Tekst',
            'name' => 'banner_text',
            'type' => 'wysiwyg',
            'required' => '1',
            'media_upload' => false,
            'tabs' => 'visual',
            'toolbar' => 'basic',
            'default_value' => 'Incididunt commodo magna ad aute Lorem. Eu laborum id ipsum nisi deserunt in in nisi voluptate enim ullamco fugiat exercitation.'
        ],

        [
            'key' => 'banner_1_bg',
            'label' => 'Achtergrond afbeelding',
            'name' => 'banner_bg',
            'type' => 'image',
            'return_format' => 'id'
        ],

        [
            'key' => 'banner_1_accordion_buttons',
            'label' => 'Knoppen',
            'name' => 'accordion_2',
            'type' => 'accordion',
            'multi_expand' => true,
            'open' => false,
        ],
        [
            'key' => 'banner_1_buttons',
            'label' => __('Knoppen', 'moonsio'),
            'name' => 'banner_1_buttons',
            'type' => 'repeater',
            'max' => '2',
            'layout' => 'block',
            'sub_fields' => [

                [
                    'key' => 'banner_1_open_popup',
                    'label' => 'Link of popup openen?',
                    'name' => 'popup',
                    'type' => 'true_false',
                    'ui' => true,
                    'ui_on_text' => __('Popup', 'moonsio'),
                    'ui_off_text' => __('Link', 'moonsio'),
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ],

                [
                    'key' => 'banner_1_button',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'link',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'banner_1_open_popup',
                                'operator' => '==',
                                'value' => '0',
                            ],
                        ],
                    ],
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ],

                [
                    'key' => 'banner_1_custom_button_text',
                    'label' => 'Knop tekst',
                    'name' => 'button_text',
                    'type' => 'text',
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'banner_1_open_popup',
                                'operator' => '==',
                                'value' => '1',
                            ],
                        ],
                    ],
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ],

                [
                    'key' => 'banner_1_data_popup',
                    'label' => __('Welke popup wil je tonen?', 'moonsio'),
                    'name' => 'data_popup',
                    'type' => 'post_object',
                    'post_type' => [
                        'popup',
                    ],
                    'multiple' => false,
                    'return_format' => 'id',
                    'ui' => true,
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'banner_1_open_popup',
                                'operator' => '==',
                                'value' => '1',
                            ],
                        ],
                    ],
                    'wrapper' => [
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ],
                ],

                [
                    'key' => 'banner_1_button_style',
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
            'key' => 'banner_1_accordion_styling',
            'label' => 'Vormgeving',
            'name' => 'accordion_3',
            'type' => 'accordion',
            'multi_expand' => true,
            'open' => false,
        ],

        [
            'key' => 'banner_1_align',
            'label' => 'Inhoud uitlijnen',
            'name' => 'align',
            'type' => 'select',
            'choices' => [
                'banner--left' => __('Links', 'moonsio'),
                'banner--center' => __('Midden', 'moonsio'),
                'banner--right' => __('Rechts', 'moonsio')
            ],
            'default_value' => 'banner--center',
            'ui' => true,
        ],
        [
            'key' => 'banner_1_width',
            'label' => 'Formaat',
            'name' => 'width',
            'type' => 'select',
            'choices' => [
                'banner--boxed' => __('Box', 'moonsio'),
                'banner--fw' => __('Volledige breedte', 'moonsio')
            ],
            'default_value' => 'banner--fw',
            'ui' => true,
        ],
    ],
];
