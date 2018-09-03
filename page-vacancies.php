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
      $the_query = new WP_Query($args);
			if($the_query->have_posts()):
				while ($the_query->have_posts()) : $the_query->the_post();
			?>

        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

      <?php
				endwhile;
			endif;
			?>

    </div>
  </div>

<?php get_footer(); ?>
