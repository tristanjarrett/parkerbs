<?php get_header(); ?>

	<?php get_template_part( 'template-parts/header-content' ); ?>

	<div class="pbs-post-section">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-9">
					<div class="pbs-content">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>

								<h4><?php the_title(); ?></h4>
								<p class="text-muted">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?></p>

								<?php
								if ( has_tag() ) {
									// Show the tags if any
									// the_tags();
								} else {
									// Do nothing
								}

								if ( has_category() ) {
									// Show the category if any
									// the_category();
								} else {
									// Do nothig
								}
								?>

								<hr>
								<?php the_content(); ?>

								<?php wp_reset_postdata(); ?>

							<?php endwhile;
						endif;
						?>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="pbs-sidebar">
						<ul>
							<?php
				       $args = array(
								 'post_type' => 'branch',
								 'posts_per_page' => -1,
								 'orderby'=> 'title',
								 'order' => 'ASC'
							 );
				       $branches = new WP_Query( $args );
				       while ( $branches->have_posts() ) : $branches->the_post(); ?>
				         <li><a href="<?php the_permalink(); ?>"><span class="pbs-icon"><i class="fas fa-fw fa-map-marker-alt"></i></span> <?php the_title(); ?></a></li>

 								<?php wp_reset_postdata(); ?>

							 <?php
				       endwhile;
				   		?>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/post-news' ); ?>

	<?php get_template_part( 'template-parts/footer-content' ); ?>

<?php get_footer(); ?>
