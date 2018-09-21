<?php
/**
 * load system jQuery
 */
function add_custom_script() {
  wp_register_script('jquery', array('jquery'));
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'add_custom_script');
