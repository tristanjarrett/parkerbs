<?php
/**
 * Products - Custom Post Type
 */
function pbs_post_product() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Products', 'parkerbs' ),
        'singular_name' => __( 'Product', 'parkerbs' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => false,
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'taxonomies'  => array( 'category' ),
      'menu_icon' => 'dashicons-cart',
      'menu_position' => null,
      'rewrite' => array(
        'slug' => 'products'
      )
    )
  );
}
add_action( 'init', 'pbs_post_product' );

// ****************************************