<?php get_header(); ?>

	<div class="pbs-breadcrumb">
		<nav class="container-fluid">
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<li>/</li>
				<li><a href="<?php echo site_url() . '/case-studies'; ?>">Case Studies</a></li>
				<li>/</li>
				<li class="text-muted"><?php the_title(); ?></li>
			</ul>
		</nav>
	</div>

	<div class="pbs-case-study-page">

		<div class="container-fluid">

			<div class="pbs-content">
				<h3 class="pbs-title"><?php the_title(); ?></h3>
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

	</div>

<?php get_footer(); ?>
