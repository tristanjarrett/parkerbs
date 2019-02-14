<div class="pbs-post-news">
	<div class="container">
		<h4 class="pbs-heading pbs-font">Recent News</h4>
	</div>

	<div class="container">
		<div class="row pbs-flex-row">

			<?php
			$args = array (
				'posts_per_page' => 4,
				'post__not_in' => array( $post->ID ),
			);
			$recent_news = new WP_Query($args);
			if($recent_news->have_posts()):
				while ($recent_news->have_posts()) : $recent_news->the_post();
			?>

				<div class="col-12 col-sm-6 col-lg-3">
					<?php get_template_part( 'template-parts/post-news-item', get_post_format() ); ?>
				</div>

			<?php
				endwhile;
			endif;
			?>
		</div>

	</div>

</div>
