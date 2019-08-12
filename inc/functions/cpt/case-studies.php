<?php
/**
 * Case Studies - Custom Post Type
 */
function pbs_post_casestudy() {
  register_post_type( 'case-study',
    array(
      'labels' => array(
        'name' => __( 'Case Studies', 'parkerbs' ),
        'singular_name' => __( 'Case Study', 'parkerbs' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'menu_icon' => 'dashicons-edit',
      'menu_position' => null,
      'rewrite' => array(
        'slug' => 'case-studies'
      )
    )
  );
}
add_action( 'init', 'pbs_post_casestudy' );
