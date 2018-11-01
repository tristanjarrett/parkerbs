<div class="pbs-home-promotions">

	<div id="pbs-carousel-action" class="carousel slide" data-ride="carousel">

	  <div class="carousel-inner">


			<?php
			$args = array(
				'post_type' => 'promotion',
				'posts_per_page' => - 1,
			);
			$promotion_loop = new WP_Query($args);
			$i = 0;

			if ($promotion_loop->have_posts()):
				while ($promotion_loop->have_posts()): $promotion_loop->the_post();

					if ($i == 0) {
						get_template_part( 'template-parts/home-promotions-slide-active', get_post_format() );
					} else {
						get_template_part( 'template-parts/home-promotions-slide', get_post_format() );
					}
					
					$i++;

				endwhile;
			endif;
			?>

	  </div>

	  <a class="carousel-control-prev" href="#pbs-carousel-action" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#pbs-carousel-action" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>

	</div>

</div>
