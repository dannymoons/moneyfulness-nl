<?php defined('ABSPATH') || exit('Forbidden');

/**
 * Add custom Gutenberg block categories
 * @see https://developer.wordpress.org/reference/hooks/block_categories_all/
 * 
 * @param array $categories
 * 
 * @return array 
 */
function moonsio_block_categories(array $block_categories): array
{
  $custom_block_categories = [
    [
      'slug' => 'moonsio',
      'icon' => 'shortcode',
      'title' => __('Moonsio Blokken', 'moonsio'),
    ],
  ];

  return array_merge($block_categories, $custom_block_categories);
}
add_filter('block_categories_all', 'moonsio_block_categories', 10, 1);

/**
 * Get file path of files in block directory
 * 
 * @param string $block 
 * @param string $filename
 * 
 * @return string 
 */
function moonsio_get_block_path(string $block, string $filename = ''): string
{
  return get_theme_file_path(sprintf('blocks/%s/%s', $block, $filename));
}

/**
 * Get and return all custom block directory names
 * 
 * @return array
 */
function moonsio_get_custom_blocks(): array
{
  $directory = get_theme_file_path('blocks/');

  return array_diff(scandir($directory), ['..', '.']);
}

/**
 * Register all custom blocks located in the '/blocks' theme folder
 * 
 * @return void 
 */
function moonsio_register_blocks(): void
{
  foreach (moonsio_get_custom_blocks() as $entry) {
    if (
      is_dir(moonsio_get_block_path($entry))
      && file_exists(moonsio_get_block_path($entry, 'view.php'))
      && file_exists(moonsio_get_block_path($entry, 'config.php'))
    ) {
      extract(include moonsio_get_block_path($entry, 'config.php'));

      $block = [
        'name' => $entry,
        'title' => $title,
        'description' => $description,
        'icon' => $icon,
        'category' => $category,
        'post_types' => $post_types,
        'render_template' => sprintf('blocks/%s/view.php', $entry),
      ];

      acf_register_block_type($block);

      if (isset($fields) && !empty($fields)) {
        $field_group = [
          'key' => sprintf('field_group_%s', $entry),
          'title' => $title,
          'fields' => $fields,
          'location' => [
            [
              [
                'param' => 'block',
                'operator' => '==',
                'value' => sprintf('acf/%s', $entry),
              ]
            ]
          ],
        ];

        acf_add_local_field_group($field_group);
      }
    }
  }
}
add_action('acf/init', 'moonsio_register_blocks', 10, 0);

/**
 * Filter allowed block types
 * @see https://developer.wordpress.org/reference/hooks/allowed_block_types_all/
 * 
 * @return array
 */
function moonsio_allowed_block_types(): array
{
  $registered_blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

  unset($registered_blocks['core/paragraph']);

  return array_keys($registered_blocks);
}
// add_filter('allowed_block_types_all', 'moonsio_allowed_block_types', 10, 0);
