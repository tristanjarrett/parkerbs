<?php
/**
 * Use the page slug "products"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-products-section">

  	<div class="container-fluid">

      <ul>
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
        $product_loop = new WP_Query( $args );
        while ( $product_loop->have_posts() ) : $product_loop->the_post(); ?>
        <li class="pbs-products-item">
          <div class="row">
            <div class="col pbs-child">
              <div class="pbs-granchild">
                <h4 class="pbs-heading pbs-font"><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>
            <div class="col-auto pbs-child">
              <div class="pbs-granchild">
                <?php if ( has_post_thumbnail() ) { ?>
          				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          				<div class="pbs-product-thumbnail" style="background-image: url('<?php echo $thumb['0']; ?>')"></div>
                  <?php } else { ?>
          				<div class="pbs-product-thumbnail" style="background-image: url('<?php echo get_bloginfo( 'template_directory' ) . '/images/core/thumbnail.svg'; ?>');"></div>
          			<?php } ?>
              </div>
            </div>
          </div>
        </li>
        <?php
        endwhile;
    		?>
      </ul>

  	</div>

  </div>

<?php get_footer(); ?>
