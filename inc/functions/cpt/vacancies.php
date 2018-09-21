<?php
/**
 * Vacancies - Custom Post Type
 */
function pbs_post_vacancy() {
  register_post_type( 'vacancy',
    array(
      'labels' => array(
        'name' => __( 'Vacancies', 'parkerbs' ),
        'singular_name' => __( 'Vacancy', 'parkerbs' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail'
      ),
      'menu_icon' => 'dashicons-businessman',
      'menu_position' => null,
      'rewrite' => array(
        'slug' => 'vacancies'
      )
    )
  );
}
add_action( 'init', 'pbs_post_vacancy' );
