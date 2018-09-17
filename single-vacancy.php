<?php get_header(); ?>

  <div class="pbs-vacancy-page">

    <div class="container-fluid">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

        <div class="row">
          <div class="col">
            <h4><?php the_title(); ?></h4>
            <p class="text-muted mb-0">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?></p>
          </div>
          <div class="col-auto">
            <form method="post">
              <input type="text" name="" value="<?php the_title(); ?>" hidden>
              <button class="btn btn-primary float-right" type="submit">Apply</button>
            </form>
          </div>
        </div>
          <hr>
          <?php the_content(); ?>

          <?php wp_reset_postdata(); ?>

        <?php endwhile;
      endif;
      ?>

    </div>

  </div>

<?php get_footer(); ?>
