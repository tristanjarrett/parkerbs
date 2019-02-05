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
      ),
      'capability_type' => array('pbs_vacancy', 'pbs_vacancies'),
      'map_meta_cap' => true
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
  $val2 = wp_create_nonce(plugin_basename(__FILE__).$post->ID);

  echo '<input type="text" name="custom_input" id="custom_input" class="widefat" placeholder="Branch name" value="'.$val.'" required />';
  echo '<input type="hidden" name="prevent_delete_meta_movetotrash" id="prevent_delete_meta_movetotrash" value="'.$val2.'" />';
}

add_action( 'save_post', 'save_detail' );

function save_detail() {
  global $post;

  if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post->ID;
  }

  if (!wp_verify_nonce($_POST['prevent_delete_meta_movetotrash'], plugin_basename(__FILE__).$post->ID)) {
    return $post_id;
  }

  update_post_meta($post->ID, 'custom_input', $_POST["custom_input"]);
}

/**
 * Add role
 */
add_role(
  'pbs_vacancy_manager', 'Vacancy Manager',
    array(
      'read' => true,
      'edit_posts' => false,
      'delete_posts' => false,
      'publish_posts' => false,
      'upload_files' => true,
    )
);

/**
 * Add role perms
 */
add_action('admin_init', 'add_pbs_vacancy_manager_caps', 999);
function add_pbs_vacancy_manager_caps() {
  // Add the roles you'd like to administer the custom post types
  $roles = array('pbs_vacancy_manager', 'editor', 'administrator');
  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {
    $role = get_role($the_role);
    $role->add_cap( 'read' );
	  $role->add_cap( 'read_pbs_vacancy');
	  $role->add_cap( 'read_private_pbs_vacancies' );
	  $role->add_cap( 'edit_pbs_vacancy' );
	  $role->add_cap( 'edit_pbs_vacancies' );
	  $role->add_cap( 'edit_others_pbs_vacancies' );
	  $role->add_cap( 'edit_published_pbs_vacancies' );
	  $role->add_cap( 'publish_pbs_vacancies' );
	  $role->add_cap( 'delete_others_pbs_vacancies' );
	  $role->add_cap( 'delete_private_pbs_vacancies' );
	  $role->add_cap( 'delete_published_pbs_vacancies' );
  }
}