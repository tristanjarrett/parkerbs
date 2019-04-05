<?php get_header(); ?>

	<div class="pbs-404-section">

		<div class="container-fluid">

			<div class="col pbs-404-text">

				<h1>Oops!</h1>

				<h3>Sorry we couldn't seem to find the page you requested.</h3>

				<h5>Error code: 404 (page not found)</h5>

				<hr>

				<h5>Here are some helpful links to get you back on track</h5>

				<ul>
					<li><a href="<?php echo get_bloginfo('wpurl'); ?>">Return Home</a></li>
					<li><a href="<?php echo site_url() . '/contact-us'; ?>">Contact Us</a></li>
					<li><a href="https://account.parkerbs.com/store-locator">Store Finder</a></li>
				</ul>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
