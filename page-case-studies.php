<?php get_header(); ?>

	<div class="pbs-case-studies-page">

		<div class="container-fluid">
			<h3><?php the_title(); ?></h3>
			<hr>
			<?php
			 $args = array(
				 'post_type' => 'case-study',
				 'posts_per_page' => -1,
				 'orderby'=> 'title',
				 'order' => 'ASC'
			 );
			 $case_studies = new WP_Query( $args );
			 while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>

				<h4>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			 	</h4>

				<?php wp_reset_postdata(); ?>

			 <?php
			 endwhile;
			?>
		</div>

	</div>

<?php get_footer(); ?>
