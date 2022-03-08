<?php defined('ABSPATH') || exit('Forbidden');

acf_add_local_field_group([
    'key' => 'video_fields',
    'title' => __('Video data', 'moonsio'),
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'video',
            ],
        ],
    ],
    'fields' => [
        [
            'key' => 'video_intro_text_field',
            'label' => __('Introductie van het artikel', 'moonsio'),
            'name' => 'intro_text',
            'type' => 'textarea',
        ],

        [
            'key' => 'youtube_video_id_field',
            'label' => __('Video ID', 'moonsio'),
            'name' => 'video_id',
            'type' => 'text',
            'instruction' => 'Plak de video ID hier, dat is het stukje uit de YouTube link achter youtube.com/watch?v='
        ],
    ]
]);
