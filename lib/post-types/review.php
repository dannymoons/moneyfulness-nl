<?php defined('ABSPATH') || exit('Forbidden');

$cpt_labels = [
  'name' => __('Reviews', 'moonsio'),
  'singular_name' => __('Review', 'moonsio'),
];

$cpt_args = [
  'labels' => $cpt_labels,
  'public' => true,
  'show_in_rest' => false,
  'has_archive' => false, // => veranderd? Dan permalinks opnieuw opslaan
  'publicly_queryable'  => false,
  'exclude_from_search' => true,

  'menu_position' => 5,
  'menu_icon' => 'dashicons-star-filled',

  'supports' => [
    'title'
  ],

  // 'rewrite' => [
  //   'slug' => 'reviews'
  // ],

  'taxonomies' => []
];

register_post_type('review', $cpt_args);
