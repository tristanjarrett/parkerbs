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

function stamco_title() {
  if (is_page()) {
    echo 'Vacancies | Stamco Building Supplies';
  } else if (is_single()) {
    the_title(); echo ' | Stamco Building Supplies';
  }
}

function fairalls_title() {
  if (is_page()) {
    echo "Vacancies | Fairalls Builders' Merchants";
  } else if (is_single()) {
    the_title(); echo " | Fairalls Builders' Merchants";
  }
}

function chandlers_title() {
  if (is_page()) {
    echo 'Vacancies | Chandlers Building Supplies';
  } else if (is_single()) {
    the_title(); echo ' | Chandlers Building Supplies';
  }
}