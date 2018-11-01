<?php get_header(); ?>

	<div class="pbs-general-page">

		<div class="container-fluid">
			<h3><?php the_title(); ?></h3>
			<hr>
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			endif;
			?>
		</div>

	</div>

<?php get_footer(); ?>
