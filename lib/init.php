<?php defined('ABSPATH') || exit('Forbidden');

/**
 * Load in all theme files
 */

foreach (glob(get_template_directory() . '/lib/*.php') as $file) {
  if (__FILE__ === $file) continue;
  require_once $file;
}
