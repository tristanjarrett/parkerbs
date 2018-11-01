<div class="carousel-item">

	<?php if ( has_post_thumbnail() ) { ?>
		<?php $promoImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
		<img src="<?php echo $promoImg['0']; ?>">
	<?php } else { ?>
		<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>">
	<?php } ?>

</div>
