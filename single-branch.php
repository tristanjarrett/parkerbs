<?php get_header(); ?>

  <div class="pbs-breadcrumb">
		<nav class="container-fluid">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li>/</li>
				<li><a href="<?php echo site_url() . '/branches'; ?>">Branches</a></li>
				<li>/</li>
				<li class="text-muted"><?php the_title(); ?></li>
			</ul>
		</nav>
	</div>

  <div class="mt-3 mb-3">

    <div class="container-fluid">

      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

          <h4><?php the_title(); ?></h4>
          <hr>
          <?php the_content(); ?>

        <?php endwhile;
      endif;
      ?>

    </div>

  </div>

<?php get_footer(); ?>
