<?php
/**
 * Use the page slug "vacancies"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-vacancies-page">
    <div class="container-fluid">

          <h4 class="pbs-font pbs-heading">Vacancies</h4>
          <hr>

          <div class="mb-4">
            <?php
        		if ( have_posts() ) :
        			while ( have_posts() ) : the_post();
        				the_content();
        			endwhile;
        		endif;
        		?>
          </div>

          <h4 class="pbs-font pbs-heading mb-3">Current Vacancies</h4>

          <div class="posts">
            <ul class="list-group">

              <?php
              $args = array(
              'post_type' => 'vacancy',
              'posts_per_page' => - 1,
              );
              $vacancy_loop = new WP_Query($args);

              if ($vacancy_loop->have_posts()):
              while ($vacancy_loop->have_posts()):
                $vacancy_loop->the_post();
              ?>

                <li class="list-group-item">
                  <a href="<?php the_permalink(); ?>">
                    <p class="mb-0"><?php the_title(); ?></p>
                    <span class="text-muted">Branch Support Centre</span>
                    <span class="text-muted float-right"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                  </a>

                </li>

              <?php
              endwhile;
              endif;
              ?>

            </ul>
          </div>

    </div>
  </div>

<?php get_footer(); ?>
