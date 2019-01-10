<div class="row pbs-flex-row">
  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'orderby'=> 'title',
    'order' => 'ASC',
    'category_name' => 'building'
  );
  $product_loop = new WP_Query( $args );
  while ( $product_loop->have_posts() ) : $product_loop->the_post();
  ?>

    <div class="col-6 col-md-4 col-lg-3">
      <div class="pbs-item pbs-flex-item">
        <?php if ( has_post_thumbnail() ) { ?>
    			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    			<div class="pbs-thumbnail" style="background-image: url('<?php echo $thumb['0']; ?>');"></div>
    			<?php } else { ?>
    			<div class="pbs-thumbnail" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>');"></div>
    		<?php } ?>
        <h5 class="pbs-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </div>
    </div>

  <?php
  endwhile;
  ?>
</div>