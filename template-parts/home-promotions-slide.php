<?php if ( has_post_thumbnail() ) { ?>
	<?php $promoImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="pbs-slide" style="background-image: url('<?php echo $promoImg['0']; ?>');">
<?php } else { ?>
	<div class="pbs-slide" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ) . '/images/core/2000x500.png'; ?>');">
<?php } ?>

	<div class="container-fluid">
		<div class="pbs-overlay">

			<div class="row">
				<div class="col">

				</div>
				<div class="col-offset-3 col-9">
					<div class="pbs-jumbotron">
					  <h2><span class="pbs-title"><?php the_title(); ?></span></h2>
					  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						<div class="text-right">
							<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
