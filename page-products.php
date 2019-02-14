<?php
/**
 * Use the page slug "products"
 */
 ?>

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

  <div class="pbs-products-section">

    <!-- building -->
    <div id="building" class="pbs-building">
      <div class="container-fluid">
        <h3 class="pbs-cat-title">Building Supplies</h3>
        <?php get_template_part( 'template-parts/products/building' ); ?>
      </div>
    </div>
    <!-- ./building -->

    <!-- kitchens -->
    <div id="kitchens" class="pbs-kitchens">
      <div class="container-fluid">
        <h3 class="pbs-cat-title">Kitchens</h3>
        <?php get_template_part( 'template-parts/products/kitchens' ); ?>
      </div>
    </div>
    <!-- ./kitchens -->

    <!-- plumbing -->
    <div id="plumbing" class="pbs-plumbing">
      <div class="container-fluid">
        <h3 class="pbs-cat-title">Plumbing Supplies</h3>
        <?php get_template_part( 'template-parts/products/plumbing' ); ?>
      </div>
    </div>
    <!-- ./plumbing -->

    <!-- joinery -->
    <div id="joinery" class="pbs-joinery">
      <div class="container-fluid">
        <h3 class="pbs-cat-title">Joinery</h3>
        <?php get_template_part( 'template-parts/products/joinery' ); ?>
      </div>
    </div>
    <!-- ./joinery -->

    <!-- ironmongery -->
    <div id="ironmongery" class="pbs-ironmongery">
      <div class="container-fluid">
        <h3 class="pbs-cat-title">Ironmongery</h3>
        <?php get_template_part( 'template-parts/products/ironmongery' ); ?>
      </div>
    </div>
    <!-- ./ironmongery -->

  </div>

<?php get_footer(); ?>
