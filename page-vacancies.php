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

        <h4 class="mb-3 pbs-font pbs-heading">Vacancies</h4>
        <hr>
        <p>Parker Building suppliers are always keen to speak with new talent interested in joining our teams across our branches and Branch Support Centre. Please see our current vacancies. </p>
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        endif;
        ?>

      </div>

      <div class="pbs-content">

        <h5 class="mb-3">Current Vacancies</h5>

        <div class="pbs-posts">
          <ul>

            <?php
            $args = array(
              'post_type' => 'vacancy',
              'posts_per_page' => -1,
            );
            $vacancy_loop = new WP_Query($args);

            if ($vacancy_loop->have_posts()): ?>

            <div class="row mb-2">
              <div class="col-md">
                <span class="text-muted"><u>Position</u></span>
              </div>
              <div class="col-md">
                <span class="text-muted"><u>Location</u></span>
              </div>
              <div class="col-md text-right">
                <span class="text-muted"><u>Posted</u></span>
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
              echo '<div class="alert alert-warning" role="alert">Thank you for your interest in joining Parker Building Supplies. There are no vacancy positions at present however, we are always keen to hear from applicants who are interested in discussing future roles. Please contact <strong>Will Postlethwaite – Recruitment Business Partner – <a href="mailto:will.postlethwaite@parkerbs.com">will.postlethwaite@parkerbs.com</a></strong></div>';
            endif;
            ?>

          </ul>
        </div>

      </div>

    </div>
  </div>

<?php get_footer(); ?>
