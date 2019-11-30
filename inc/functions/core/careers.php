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
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-vacancy-{$cat->slug}.php";
    }
  } 
  return $t;
}