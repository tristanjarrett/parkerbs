<?php
/**
 * Use the page slug "about-us"
 */
 ?>

<?php get_header(); ?>

	<div class="container-fluid">

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {

        the_post();
    		the_content();

  		}
    }
    ?>

	</div>

<?php get_footer(); ?>
