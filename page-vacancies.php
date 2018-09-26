<?php
/**
 * Use the page slug "vacancies"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-vacancies-page">
    <div class="container-fluid">

      <h4 class="pbs-font pbs-heading">Vacancies</h4>

      <?php
  		if ( have_posts() ) :
  			while ( have_posts() ) : the_post();
  				the_content();
  			endwhile;
  		endif;
  		?>

      <?php
      $args = array(
        'post_type' => 'vacancy',
        'posts_per_page' => -1,
      );
      $vacancy_loop = new WP_Query($args);
			if($vacancy_loop->have_posts()):
        echo '<ul>';
          while ($vacancy_loop->have_posts()) : $vacancy_loop->the_post();
			?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

      <?php
				  endwhile;
        echo '</ul>';
			endif;
			?>

    </div>
  </div>

<?php get_footer(); ?>
