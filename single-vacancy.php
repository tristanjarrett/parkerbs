<?php get_header(); ?>

  <div class="pbs-vacancy-page">

    <div class="container-fluid">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

          <h4><?php the_title(); ?></h4>
          <p class="text-muted">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?></p>
          <hr>
          <?php the_content(); ?>

          <?php wp_reset_postdata(); ?>

        <?php endwhile;
      endif;
      ?>

    </div>

  </div>

<?php get_footer(); ?>
