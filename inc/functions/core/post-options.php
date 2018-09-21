<?php
/**
 * enable post thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Remove Screen Options (Non-Admins)
 */
function wpb_remove_screen_options() {
  if(!current_user_can('manage_options')) {
    return false;
  }
  return true;
}
add_filter('screen_options_show_screen', 'wpb_remove_screen_options');
