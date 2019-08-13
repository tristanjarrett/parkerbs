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

	<div class="pbs-case-studies-page">

		<div class="container-fluid">
			<h3><?php the_title(); ?></h3>
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

			<?php
			 $args = array(
				 'post_type' => 'case-study',
				 'posts_per_page' => -1,
				 'orderby'=> 'title',
				 'order' => 'ASC'
			 );
			 $case_studies = new WP_Query( $args );
			 while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>

				<div class="row mb-4">
					<div class="col-sm-3 mb-4">

					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img src="<?php echo $thumb['0']; ?>" alt="">
							<?php } else { ?>
							<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>" alt="">
						<?php } ?>
					</a>

					</div>
					<div class="col-sm-9">
						<p class="text-muted"><?php the_date(); ?></p>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<span class="mb-3" style="display: block; text-overflow: ellipsis; word-wrap: break-word; overflow: hidden; max-height: 12em; line-height: 1.6em;">
							<?php the_content(); ?>
						</span>

						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>

					</div>
				</div>



				<?php wp_reset_postdata(); ?>

			 <?php
			 endwhile;
			?>
		</div>

	</div>

<?php get_footer(); ?>
