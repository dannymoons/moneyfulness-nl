<?php defined('ABSPATH') || exit('Forbidden');

$cpt_labels = [
  'name' => __('Evenementen', 'moonsio'),
  'singular_name' => __('Evenement', 'moonsio'),
  'search_items' => __('Zoek een evenement', 'moonsio'),
  'all_items' => __('Alle evenementen', 'moonsio'),
  'edit_item' => __('Bewerk evenement', 'moonsio'),
  'update_item' => __('Evenement bijwerken', 'moonsio'),
  'add_new_item' => __('Voeg nieuw evenement toe', 'moonsio'),
  'new_item_name' => __('Nieuw evenement', 'moonsio'),
  'add_or_remove_items' => __('Voeg evenement toe of verwijder', 'moonsio'),
  'choose_from_most_used' => __('Selecteer uit meest gekozen', 'moonsio'),
  'menu_name' => __('Events', 'moonsio'),
];

$cpt_args = [
  'labels' => $cpt_labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => false,
  'publicly_queryable'  => false,
  'exclude_from_search' => true,

  'menu_position' => 6,
  'menu_icon' => 'dashicons-calendar-alt',

  'supports' => [
    'title',
    'editor'
  ],

  'rewrite' => [
    'slug' => 'evenementen'
  ],

  'taxonomies' => []
];

register_post_type('event', $cpt_args);
