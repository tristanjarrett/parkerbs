<?php

	/**
	 * custom page title
	 */
	function pbs_title() {
	 $site_description = get_bloginfo('description', 'display');
	 $site_name = get_bloginfo('name');
	 // for home page
	 if ( $site_description && ( is_home() || is_front_page() ) ):
		 echo $site_name; echo ' | '; echo  $site_description;
	 endif;
	 // for other pages
	 if (!( is_home() ) && ! is_404() ):
		 the_title(); echo ' | '; echo $site_name;
	 endif;
	}

	/**
	 * load system jQuery
	 */
	function add_custom_script() {
		wp_register_script('jquery', array('jquery'));
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'add_custom_script');

	/**
	 * enable post thumbnails
	 */
	add_theme_support('post-thumbnails');

	/**
	 * remove comments everywhere
	 */
	// removes from admin menu
	function my_remove_admin_menus() {
		remove_menu_page( 'edit-comments.php' );
	}
	add_action( 'admin_menu', 'my_remove_admin_menus' );

	// removes from post and pages
	function remove_comment_support() {
		remove_post_type_support( 'post', 'comments' );
		remove_post_type_support( 'page', 'comments' );
	}
	add_action('init', 'remove_comment_support', 100);

	// removes from admin bar
	function mytheme_admin_bar_render() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

	/**
	 * custom post type for branches
	 */
	function pbs_post_branch() {
	  register_post_type( 'branch',
	    array(
	      'labels' => array(
	        'name' => __( 'Branches', 'parkerbs' ),
	        'singular_name' => __( 'Branch', 'parkerbs' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => true, // true because there is a dedicated branch "page"
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-location-alt',
 	    	'menu_position' => null,
				'rewrite' => array(
					'slug' => 'branches',
				),
	    )
	  );
	}
	add_action( 'init', 'pbs_post_branch' );

	/**
	 * add custom post type products
	 */
	function pbs_post_product() {
	  register_post_type( 'product',
	    array(
	      'labels' => array(
	        'name' => __( 'Products', 'parkerbs' ),
	        'singular_name' => __( 'Product', 'parkerbs' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => false,
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-cart',
		    'menu_position' => null,
				'rewrite' => array(
					'slug' => 'products',
				),
	    )
	  );
	}
	add_action( 'init', 'pbs_post_product' );

	/**
	 * add custom post type vacancies
	 */
	function pbs_post_vacancy() {
	  register_post_type( 'vacancy',
	    array(
	      'labels' => array(
	        'name' => __( 'Vacancies', 'parkerbs' ),
	        'singular_name' => __( 'Vacancy', 'parkerbs' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => true,
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-businessman',
 	    	'menu_position' => null,
				'rewrite' => array(
					'slug' => 'vacancies',
				),
	    )
	  );
	}
	add_action( 'init', 'pbs_post_vacancy' );
