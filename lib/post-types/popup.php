<?php defined('ABSPATH') || exit('Forbidden');

$cpt_labels = [
  'name' => __('Popups', 'moonsio'),
  'singular_name' => __('Popup', 'moonsio'),
  'search_items' => __('Zoek een popup', 'moonsio'),
  'all_items' => __('Alle opups', 'moonsio'),
  'edit_item' => __('Bewerk popup', 'moonsio'),
  'update_item' => __('Popup bijwerken', 'moonsio'),
  'add_new_item' => __('Voeg nieuww popup toe', 'moonsio'),
  'new_item_name' => __('Nieuww popup', 'moonsio'),
  'add_or_remove_items' => __('Voeg popup toe of verwijder', 'moonsio'),
  'choose_from_most_used' => __('Selecteer uit meest gekozen', 'moonsio'),
  'menu_name' => __('Popups', 'moonsio'),
];

$cpt_args = [
  'labels' => $cpt_labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => false,
  'publicly_queryable'  => false,
  'exclude_from_search' => true,
  'menu_position' => 7,
  'menu_icon' => 'dashicons-calendar-alt',

  'supports' => [
    'title',
    'editor'
  ],

  'taxonomies' => []
];

register_post_type('popup', $cpt_args);
