<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
    'key' => 'blog_fields',
    'title' => __('Blog data', 'moonsio'),
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'blog',
            ],
        ],
    ],
    'fields' => [
        [
            'key' => 'blog_intro_text_field',
            'label' => __('Introductie van het artikel', 'moonsio'),
            'name' => 'intro_text',
            'type' => 'textarea',
        ],

        [
            'key' => 'blog_featured_img_field',
            'label' => __('Uitgelichte afbeelding', 'moonsio'),
            'name' => 'blog_featured_img',
            'type' => 'image',
            'return_format' => 'id'
        ],
    ]
]);
