<?php
/**
 * Promotions - Custom Post Type
 */
function pbs_post_promotion() {
  register_post_type( 'promotion',
    array(
      'labels' => array(
        'name' => __( 'Promotions', 'parkerbs' ),
        'singular_name' => __( 'Promotion', 'parkerbs' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'menu_icon' => 'dashicons-chart-area',
      'menu_position' => null,
      'rewrite' => array(
        'slug' => 'promotions'
      )
    )
  );
}
add_action( 'init', 'pbs_post_promotion' );
