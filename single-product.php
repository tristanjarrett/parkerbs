<?php get_header(); ?>

	<?php get_template_part( 'template-parts/header-content' ); ?>

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

	<div class="pbs-contact-section">

		<div class="container-fluid">

			<p>Please contact your local branch for more information on <?php the_title(); ?>.</p>
			<a href="https://account.parkerbs.com/store-locator" class="btn btn-primary">Find your nearest branch</a>

		</div>

	</div>

	<?php get_template_part( 'template-parts/footer-content' ); ?>

<?php get_footer(); ?>
