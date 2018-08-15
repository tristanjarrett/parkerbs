<div class="pbs-post-other-news-item pbs-flex-item">

			<?php if ( has_post_thumbnail() ) { ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="pbs-thumbnail" style="background-image: url('<?php echo $thumb['0']; ?>');"></div>
				<?php } else { ?>
				<div class="pbs-thumbnail" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>');"></div>
			<?php } ?>

			<div class="pbs-text">
				<span><?php the_title(); ?></span>
			</div>

			<div class="pbs-more">
				<span><a href="<?php the_permalink(); ?>">Read more <i class="fas fa-fw fa-chevron-circle-right fa-lg"></i></a></span>
			</div>

</div>
