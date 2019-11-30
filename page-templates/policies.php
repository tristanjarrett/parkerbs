<?php
/**
 * Template Name: Policies
 */
 ?>

<?php get_header(); ?>

	<?php get_template_part( 'template-parts/header-content' ); ?>

	<div class="container-fluid">
    <?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		endif;
		?>
	</div>

	<?php get_template_part( 'template-parts/footer-content' ); ?>

<?php get_footer(); ?>
