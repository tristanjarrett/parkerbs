<?php if ( has_post_thumbnail() ) { ?>
	<?php $promoImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="pbs-slide" style="background-image: url('<?php echo $promoImg['0']; ?>');">
<?php } else { ?>
	<div class="pbs-slide">
<?php } ?>

	<div class="pbs-overlay">
		<div class="container-fluid">
			<h5>Building Sussex and Kent’s future, one brick and block at a time.</h5>
		</div>
	</div>

</div>
