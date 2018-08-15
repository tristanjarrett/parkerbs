<?php get_header(); ?>

  <div class="mt-3 mb-3">

    <div class="container-fluid">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

          <h4><?php the_title(); ?></h4>
          <hr>
          <?php the_content(); ?>
          
        <?php endwhile;
      endif;
      ?>

    </div>

  </div>

<?php get_footer(); ?>
