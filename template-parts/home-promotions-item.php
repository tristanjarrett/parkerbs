<div class="pbs-slide" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ) . '/images/banners/lorry-front-side.jpg'; ?>');">

	<div class="container">
		<div class="pbs-overlay">

			<div class="row d-flex align-items-center">

				<div class="col-auto">
					<?php if ( has_post_thumbnail() ) { ?>
						<?php $promoImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<img src="<?php echo $promoImg['0']; ?>" alt="Featured" class="pbs-featured">
					<?php } else { ?>
						<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>" alt="Featured" class="pbs-featured">
					<?php } ?>
				</div>

				<div class="col">
					<div class="pbs-jumbotron">
					  <h3><span class="pbs-title"><?php the_title(); ?></span></h3>
						<a class="pbs-button" href="">Read more <i class="fas fa-chevron-circle-right fa-fw fa-lg"></i></a>
					</div>
				</div>

			</div>

		</div>
	</div>

</div>
