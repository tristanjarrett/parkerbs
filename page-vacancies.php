<?php
/**
 * Use the page slug "vacancies"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-breadcrumb">
    <nav class="container-fluid">
      <ul>
        <li><a href="<?php echo site_url(); ?>">Home</a></li>
        <li>/</li>
        <li class="text-muted"><?php the_title(); ?></li>
      </ul>
    </nav>
  </div>

  <div class="pbs-vacancies-page">
    <div class="container-fluid">

          <div class="pbs-content">

            <h4>Vacancies</h4>
            <hr>
            <?php
        		if ( have_posts() ) :
        			while ( have_posts() ) : the_post();
        				the_content();
        			endwhile;
        		endif;
        		?>

          </div>

            <div class="pbs-posts">
              <ul>

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

                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <p class="mb-0"><?php the_title(); ?></p>
                      <span class="text-muted">Based in <?php echo get_post_meta($post->ID, 'custom_input', true); ?></span>
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
