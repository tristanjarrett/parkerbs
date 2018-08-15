<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row pbs-404">
			<div class="col pbs-404-text">
				<h1>Oops!</h1>
				<h3>Sorry we couldn't seem to find the page you requested.</h3>
				<h5>Error code: 404 (page not found)</h5>
				<hr>
				<h5>Here are some helpful links to get you back on track</h5>
				<a href="<?php echo get_bloginfo('wpurl'); ?>">Return Home</a>
				<br>
				<a href="<?php echo get_bloginfo('wpurl') . '/contact-us'; ?>">Contact Us</a>
				<br>
				<a href="<?php echo get_bloginfo('wpurl') . '/branches'; ?>">Store Finder</a>
			</div>
			<div class="col-auto">
				<img src="<?php echo get_bloginfo('template_directory') . '/images/core/404.png'; ?>" alt="404" height="450px">

			</div>
		</div>
	</div>

<?php get_footer(); ?>
