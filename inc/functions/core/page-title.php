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
