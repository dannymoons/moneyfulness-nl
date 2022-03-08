<?php defined('ABSPATH') || exit('Forbidden');

function hide_menu()
{
    /* Dashboard */
    // remove_menu_page( 'index.php' );                     // Dashboard + submenus
    // remove_menu_page( 'about.php' );                     // WordPress menu
    remove_submenu_page('index.php', 'update-core.php');    // Update 

    /* Remove default items */
    remove_menu_page('edit-comments.php');                  // Comments
    // remove_menu_page('plugins.php');                        // Plugins
    // remove_menu_page('tools.php');                          // Tools
    // remove_menu_page('users.php');                       // Users
    // remove_menu_page( 'edit.php' );                      // Posts
    // remove_menu_page( 'upload.php' );                    // Media
    // remove_menu_page( 'edit.php?post_type=page' );       // Pages
    // remove_menu_page( 'themes.php' );                    // Appearance
    // remove_menu_page( 'options-general.php' );           // Settings

    /* Remove 3rd party items */
    // remove_menu_page('acf.php');                         // ACF
}

add_action('admin_head', 'hide_menu');
