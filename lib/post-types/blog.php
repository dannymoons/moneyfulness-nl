<?php defined('ABSPATH') || exit('Forbidden');

$cpt_labels = [
  'name' => __('Blogs', 'moonsio'),
  'singular_name' => __('Blog', 'moonsio'),
  'search_items' => __('Zoek een blog', 'moonsio'),
  'all_items' => __('Alle items', 'moonsio'),
  'edit_item' => __('Bewerk blog', 'moonsio'),
  'update_item' => __('Blog bijwerken', 'moonsio'),
  'add_new_item' => __('Voeg nieuwe blog toe', 'moonsio'),
  'new_item_name' => __('Nieuwe blog', 'moonsio'),
  'add_or_remove_items' => __('Voeg blog toe of verwijder', 'moonsio'),
  'choose_from_most_used' => __('Selecteer uit meest gekozen', 'moonsio'),
  'menu_name' => __('Blogs', 'moonsio'),
];

$cpt_args = [
  'labels' => $cpt_labels,
  'public' => true,
  'show_in_rest' => true,
  // 'has_archive' => true,

  'menu_position' => 5,
  'menu_icon' => 'dashicons-book',

  'supports' => [
    'editor',
    'title'
  ],

  'taxonomies' => ['blog-category']
];

$cpt_tax_labels = [
  'name' => __('Categorie', 'moonsio'),
  'singular_name' => __('Categorie', 'moonsio'),
  'search_items' => __('Zoek een categorie', 'moonsio'),
  'all_items' => __('Alle items', 'moonsio'),
  'edit_item' => __('Bewerk categorie', 'moonsio'),
  'update_item' => __('Categorie bijwerken', 'moonsio'),
  'add_new_item' => __('Voeg nieuwe categorie toe', 'moonsio'),
  'new_item_name' => __('Nieuwe categorie', 'moonsio'),
  'add_or_remove_items' => __('Voeg categorie toe of verwijder', 'moonsio'),
  'choose_from_most_used' => __('Selecteer uit meest gekozen', 'moonsio'),
  'menu_name' => __('Categoriën', 'moonsio'),
];

$cpt_tax_args = [
  'labels' => $cpt_tax_labels,
  'public' => true,
  'show_in_rest' => true,
  'has_archive' => true,
  'rewrite' => [
    'slug' => 'blog-categorie'
  ],
  // 'taxonomies' => []
];

register_post_type('blog', $cpt_args);
register_taxonomy('blog-category', ['blog'], $cpt_tax_args);
