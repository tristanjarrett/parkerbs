<?php
function pbs_linkedin_meta() {
  if( get_post_type() == 'vacancy' ) { ?>
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:image" content="<?php echo get_bloginfo('template_directory') . '/images/core/pbs-careers.png'; ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php global $wp; echo home_url( $wp->request ); ?>" />
  <?php }
  else {
    // do nothing
  }
}

// Create special page templates by post type and category name
// function check_for_category_single_template( $t ) {
//   foreach( (array) get_the_category() as $cat ) { 
//     if ( file_exists(get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php"; 
//     if($cat->parent) {
//       $cat = get_the_category_by_ID( $cat->parent );
//       if ( file_exists(get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php";
//     }
//   } 
//   return $t;
// }
// add_filter('single_template', 'check_for_category_single_template');

// Create special page templates by post type and taxonomy term
function check_for_taxonomy_single_template( $t ) {
	global $post;
	foreach( (array) get_the_terms($post, 'employer') as $cat ) { 
	  if ( file_exists(get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php"; 
	} 
	return $t;
}
add_filter('single_template', 'check_for_taxonomy_single_template');

// Register custom tax for Vacancy to sort between businesses
function create_vacancy_taxonomies() {
  $labels = array(
		'name'              => _x( 'Employer', 'taxonomy general name', 'parkerbs' ),
		'singular_name'     => _x( 'Employer', 'taxonomy singular name', 'parkerbs' ),
		'search_items'      => __( 'Search Employers', 'parkerbs' ),
		'all_items'         => __( 'All Employers', 'parkerbs' ),
		'parent_item'       => __( 'Parent Employer', 'parkerbs' ),
		'parent_item_colon' => __( 'Parent Employer:', 'parkerbs' ),
		'edit_item'         => __( 'Edit Employer', 'parkerbs' ),
		'update_item'       => __( 'Update Employer', 'parkerbs' ),
		'add_new_item'      => __( 'Add New Employer', 'parkerbs' ),
		'new_item_name'     => __( 'New Employer Name', 'parkerbs' ),
		'menu_name'         => __( 'Employer', 'parkerbs' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'employer' ),
		'capabilities' => array(
			// 'manage_terms' => 'pbs_vacancy_manager',
			// 'edit_terms'   => 'pbs_vacancy_manager',
			// 'delete_terms' => 'pbs_vacancy_manager',
			'assign_terms' => 'read',
		),
	);

  register_taxonomy( 'employer', 'vacancy', $args );
}
add_action( 'init', 'create_vacancy_taxonomies', 0 );