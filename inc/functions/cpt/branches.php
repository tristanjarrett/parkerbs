<?php
/**
 * Branches - Custom Post Type
 */
function pbs_post_branch() {
  register_post_type( 'branch',
    array(
      'labels' => array(
        'name' => __( 'Branches', 'parkerbs' ),
        'singular_name' => __( 'Branch', 'parkerbs' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'menu_icon' => 'dashicons-location-alt',
      'menu_position' => null,
      'rewrite' => array(
        'slug' => 'branches'
      )
    )
  );
}
add_action( 'init', 'pbs_post_branch' );
