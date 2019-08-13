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
			<h3 class="mb-3"><?php the_title(); ?></h3>
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
				 'posts_per_page' => -1
			 );
			 $case_studies = new WP_Query( $args );
			 while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>

			 <div class="pbs_single">
				<div class="row">
					<div class="col-md-3 mb-4">

					<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							<img src="<?php echo $thumb['0']; ?>" alt="" class="pbs_thumb">
							<?php } else { ?>
							<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>" alt="" class="pbs_thumb">
						<?php } ?>
					</a>

					</div>
					<div class="col-md-9">
						<p class="text-muted"><?php echo get_the_date(); ?></p>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="pbs_preview">
							<?php the_content(); ?>
						</div>

						<a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more <i class="fas fa-fw fa-chevron-circle-right fa-lg"></i></a>

					</div>
				</div>

			</div>

				<?php wp_reset_postdata(); ?>

			 <?php
			 endwhile;
			?>
		</div>

	</div>

<?php get_footer(); ?>
