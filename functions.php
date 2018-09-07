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
	 * remove non-needed menu items
	 */
	function menu_remove () {
		remove_menu_page('edit-comments.php');
	}
	add_action('admin_menu', 'menu_remove');

	/**
	 * Ccustom post type for branches
	 */
	function pbs_post_branch() {
	  register_post_type( 'branch',
	    array(
	      'labels' => array(
	        'name' => __( 'Branches' ),
	        'singular_name' => __( 'Branch' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => true, // true because there is a dedicated branch "page"
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-location-alt',
 	    	'menu_position' => null,
				'rewrite' => array('slug' => 'branches'),
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
	        'name' => __( 'Products' ),
	        'singular_name' => __( 'Product' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => false,
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-cart',
		    'menu_position' => null,
				'rewrite' => array('slug' => 'products'),
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
	        'name' => __( 'Vacancies' ),
	        'singular_name' => __( 'Vacancy' ),
	      ),
	      'public' => true,
	      'has_archive' => false,
			 	'publicly_queryable'  => true,
		    'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields' ),
			 	'menu_icon' => 'dashicons-businessman',
 	    	'menu_position' => null,
				'rewrite' => array('slug' => 'vacancies'),
	    )
	  );
	}
	add_action( 'init', 'pbs_post_vacancy' );

	/*
	 * Creating a function to create our CPT
	 */
	function custom_post_type() {
		$labels = array(
			'name'                => _x( 'Movies', 'Post Type General Name', 'parkerbs' ),
			'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'parkerbs' ),
			'menu_name'           => __( 'Movies', 'parkerbs' ),
			'parent_item_colon'   => __( 'Parent Movie', 'parkerbs' ),
			'all_items'           => __( 'All Movies', 'parkerbs' ),
			'view_item'           => __( 'View Movie', 'parkerbs' ),
			'add_new_item'        => __( 'Add New Movie', 'parkerbs' ),
			'add_new'             => __( 'Add New', 'parkerbs' ),
			'edit_item'           => __( 'Edit Movie', 'parkerbs' ),
			'update_item'         => __( 'Update Movie', 'parkerbs' ),
			'search_items'        => __( 'Search Movie', 'parkerbs' ),
			'not_found'           => __( 'Not Found', 'parkerbs' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'parkerbs' ),
		);
		$args = array(
			'label'               => __( 'movies', 'parkerbs' ),
			'description'         => __( 'Movie news and reviews', 'parkerbs' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'genres' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'movies', $args );
	}
	add_action( 'init', 'custom_post_type', 0 );
