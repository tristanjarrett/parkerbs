<?php get_header(); ?>

	<div class="pbs-post-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
					<div class="pbs-sidebar">
						<?php
			       $args = array( 'post_type' => 'branch', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
			       $loop = new WP_Query( $args );
			       while ( $loop->have_posts() ) : $loop->the_post(); ?>
			         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			       <?php
			       endwhile;
			   		?>
					</div>
				</div>
				<div class="col-lg-9">
					<div class="pbs-post-content">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>

								<h4><?php the_title(); ?></h4>
								<p class="text-muted">Posted <i class="far fa-fw fa-calendar-alt"></i> <?php the_date(); ?> by <i class="far fa-fw fa-user"> </i><?php the_author(); ?></p>
								<hr>
								<?php the_content(); ?>

								<?php wp_reset_postdata(); ?>

							<?php endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/post-other-news' ); ?>

<?php get_footer(); ?>
