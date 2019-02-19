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