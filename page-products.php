<?php
/**
 * Use the page slug "products"
 */
 ?>

<?php get_header(); ?>

  <div class="pbs-products-section">

    <div class="container-fluid">

      <!-- Building -->
      <?php get_template_part( 'template-parts/products/building' ); ?>
      <!-- ./Building -->

      <hr>

      <!-- kitchens -->
      <?php get_template_part( 'template-parts/products/kitchens' ); ?>
      <!-- ./kitchens -->

      <hr>

      <!-- plumbing -->
      <?php get_template_part( 'template-parts/products/plumbing' ); ?>
      <!-- ./plumbing -->

      <hr>

      <!-- joinery -->
      <?php get_template_part( 'template-parts/products/joinery' ); ?>
      <!-- ./joinery -->

      <hr>

      <!-- ironmongery -->
      <?php get_template_part( 'template-parts/products/ironmongery' ); ?>
      <!-- ./ironmongery -->

    </div>

  </div>

<?php get_footer(); ?>
