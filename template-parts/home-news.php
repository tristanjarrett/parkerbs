<div class="pbs-home-news">
	<div class="container-fluid">
		<h4 class="pbs-heading pbs-font">Latest News</h4>
	</div>

	<div class="container-fluid">
		<div class="row pbs-flex-row">

			<?php
			$args = array (
				'posts_per_page' => 8,
			);
			$latest_news = new WP_Query($args);
			if($latest_news->have_posts()):
				while ($latest_news->have_posts()) : $latest_news->the_post();
			?>

				<div class="col-12 col-sm-6 col-lg-3">
					<?php get_template_part( 'template-parts/home-news-item', get_post_format() ); ?>
				</div>

			<?php
				endwhile;
			endif;
			?>
		</div>

	</div>

</div>
