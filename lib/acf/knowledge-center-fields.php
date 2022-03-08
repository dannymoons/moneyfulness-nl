<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
    'key' => 'knowledge_center_fields',
    'title' => __('Kennisbank data', 'moonsio'),
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'knowledge-center',
            ],
        ],
    ],
    'fields' => [
        [
            'key' => 'knowledge_center_intro_text_field',
            'label' => __('Introductie van het artikel', 'moonsio'),
            'name' => 'intro_text',
            'type' => 'textarea',
        ],

        [
            'key' => 'knowledge_center_featured_img_field',
            'label' => __('Uitgelichte afbeelding', 'moonsio'),
            'name' => 'post_featured_img',
            'type' => 'image',
            'return_format' => 'id'
        ],
    ]
]);
