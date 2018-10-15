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

/**
 * Vacancies - Metabox
 */
 add_action( 'admin_init', 'custom_metabox' );

 function custom_metabox() {
   add_meta_box( 'custom_metabox_01', 'Location', 'custom_metabox_field', 'vacancy', 'normal', 'low' );
 }

 function custom_metabox_field() {
   global $post;

   $data = get_post_custom($post->ID);
   $val = isset($data['custom_input']) ? esc_attr($data['custom_input'][0]) : '';

   echo '<input type="text" name="custom_input" id="custom_input" value="'.$val.'" required />';
 }

 add_action( 'save_post', 'save_detail' );

 function save_detail() {
   global $post;

   if(define('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
     return $post->ID;
   }

   update_post_meta($post->ID, 'custom_input', $_POST["custom_input"]);
 }
