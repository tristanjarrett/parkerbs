<?php get_header(); ?>

	<div class="pbs-breadcrumb">
		<nav class="container-fluid">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li>/</li>
				<li><a href="<?php echo site_url() . '/products'; ?>">Products</a></li>
				<li>/</li>
				<li class="text-muted"><?php the_title(); ?></li>
			</ul>
		</nav>
	</div>

	<div class="pbs-product-section">

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
