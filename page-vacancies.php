<?php
/**
 * Use the page slug "vacancies"
 */
 ?>

<?php get_header(); ?>



  <?php get_template_part( 'template-parts/header-content' ); ?>

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

        <h4 class="mb-3 pbs-font pbs-heading">Careers</h4>
        <hr>
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        endif;
        ?>

      </div>

      <div class="pbs-content">

        <?php
        $argsCount = array(
          'post_type' => 'vacancy',
          'post_status' => 'publish',
          'numberposts' => -1,
          'tax_query' => array(
            array(
                'taxonomy' => 'employer',
                'field' => 'slug',
                'terms' => 'parkers'
            )
          )
        );
        $postNum = count( get_posts( $argsCount ) );
        ?>

        <h5 class="mb-3">Current Vacancies <small>(<?php echo $postNum; ?>)</small></h5>

        <div class="pbs-posts">
          <ul>

            <?php
            $args = array(
              'post_type' => 'vacancy',
              'posts_per_page' => 10,
              'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
              'tax_query' => array(
                array(
                    'taxonomy' => 'employer',
                    'field' => 'slug',
                    'terms' => 'parkers'
                )
              )
            );
            $vacancy_loop = new WP_Query($args);

            if ($vacancy_loop->have_posts()): ?>

            <div class="row mb-2">
              <div class="col-md">
                <span class="text-muted"><strong>Position</strong></span>
              </div>
              <div class="col-md">
                <span class="text-muted"><strong>Location</strong></span>
              </div>
              <div class="col-md text-right">
                <span class="text-muted"><strong>Posted</strong></span>
              </div>
            </div>

            <?php  while ($vacancy_loop->have_posts()):
                $vacancy_loop->the_post();
            ?>

            <li>
              <a href="<?php the_permalink(); ?>">

                <div class="row">
                  <div class="col-md">
                    <?php the_title(); ?>
                  </div>
                  <div class="col-md">
                    <span><?php echo get_post_meta($post->ID, 'custom_input', true); ?></span>
                  </div>
                  <div class="col-md text-right">
                    <span class="text-muted"></span> <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?>
                  </div>
                </div>

              </a>
            </li>

            <?php
              endwhile;

            else:
              echo '<div class="alert alert-warning" role="alert">Thank you for your interest in joining Parker Building Supplies. There are no vacancy positions at present however, we are always keen to hear from applicants who are interested in discussing future roles. Please contact <strong><a href="mailto:recruitment@parkerbs.com">recruitment@parkerbs.com</a></strong></div>';
            endif;
            ?>

          </ul>
        </div>

        <div class="my-pagination">
          <div class="my-item">
            <?php 
              $big = 999999999;
              echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $vacancy_loop->max_num_pages,
                  'prev_text' => '<i class="fas fa-chevron-left"></i>',
                  'next_text' => '<i class="fas fa-chevron-right"></i>'
            ) );

              wp_reset_postdata();
            ?>
          </div>
        </div>

      </div>

      <div class="pbs-group">
        <h4 class="mb-3 pbs-font pbs-heading">More opportunities within our group</h4>
        <div class="row">
          <div class="col-md-4">
            <div class="pbs-item">
              <div class="pbs-img-back pbs-fairalls">
                <div class="pbs-img" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/group/fairalls-logo.png');"></div>
              </div>
              <a href="<?php echo site_url() . '/fairalls-vacancies'; ?>">See Vacancies <i class="fas fa-fw fa-chevron-circle-right fa-lg"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pbs-item">
              <div class="pbs-img-back pbs-stamco">
                <div class="pbs-img" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/group/stamco-logo.svg');"></div>
              </div>
              <a href="<?php echo site_url() . '/stamco-vacancies'; ?>">See Vacancies <i class="fas fa-fw fa-chevron-circle-right fa-lg"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pbs-item">
              <div class="pbs-img-back pbs-chandlers">
                <div class="pbs-img" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/group/chandlers-logo.png');"></div>
              </div>
              <a href="<?php echo site_url() . '/chandlers-vacancies'; ?>">See Vacancies <i class="fas fa-fw fa-chevron-circle-right fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php get_template_part( 'template-parts/footer-content' ); ?>

<?php get_footer(); ?>
