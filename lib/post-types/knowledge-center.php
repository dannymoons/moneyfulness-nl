<?php defined('ABSPATH') || exit('Forbidden');

$cpt_labels = [
  'name' => __('Kennisbank', 'moonsio'),
  'singular_name' => __('Kennisbank', 'moonsio'),
  'search_items' => __('Zoek een artikel', 'moonsio'),
  'all_items' => __('Alle items', 'moonsio'),
  'edit_item' => __('Bewerk artikel', 'moonsio'),
  'update_item' => __('Artikel bijwerken', 'moonsio'),
  'add_new_item' => __('Voeg nieuw artikel toe', 'moonsio'),
  'new_item_name' => __('Nieuw artikel', 'moonsio'),
  'add_or_remove_items' => __('Voeg artikel toe of verwijder', 'moonsio'),
  'choose_from_most_used' => __('Selecteer uit meest gekozen', 'moonsio'),
  'menu_name' => __('Kennisbank', 'moonsio'),

];

$cpt_args = [
  'labels' => $cpt_labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => false,
  'menu_position' => 5,
  'menu_icon' => 'dashicons-welcome-learn-more',
  'supports' => [
    'editor',
    'title'
  ],
  'taxonomies' => [],
  'rewrite' => [
    'slug' => 'kennisbank',
  ],
];

$cpt_tax_labels = [
  'name' => __('Categorie', 'moonsio'),
  'singular_name' => __('Categorie', 'moonsio'),
];

$cpt_tax_args = [
  'labels' => $cpt_tax_labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => true,
  // 'taxonomies' => []
  'rewrite' => [
    'slug' => 'kennisbank-categorie'
  ],
];

register_post_type('knowledge-center', $cpt_args);
register_taxonomy('knowledge-center-category', ['knowledge-center'], $cpt_tax_args);
