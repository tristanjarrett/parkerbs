<?php
/**
 * Use the page slug "vacancies"
 */
 ?>

<?php get_header(); ?>


  <div class="container-fluid">

    <?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		endif;
		?>

    <div class="">

        <?php
        $args = array( 'post_type' => 'vacancy', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <h4><?php the_title(); ?></h4>
          <?php the_content(); ?>

        <?php
        endwhile;
    		?>

  	</div>

  </div>

<?php get_footer(); ?>
