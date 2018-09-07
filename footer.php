	<!-- footer -->
	<footer class="pbs-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-lg-3 pbs-col">
					<h5>My Account</h5>
					<ul>
						<li><a href="#">Account Application</a></li>
						<li><a href="#">Request Login</a></li>
						<li><a href="#">View My Account</a></li>
						<li><a href="#">Password Recovery</a></li>
					</ul>
					<br>
					<a href="<?php echo get_bloginfo('wpurl'); ?>">
						<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/logo.png'; ?>" alt="Logo" height="100">
					</a>
				</div>
				<div class="col-sm-6 col-lg-3 pbs-col">
					<h5>Information</h5>
					<ul>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/contact-us'; ?>">Contact Us</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/about-us'; ?>">About Us</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/blog'; ?>">Our Blog</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/vacancies'; ?>">Vacancies</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/privacy-policy'; ?>">Privacy Policy</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/terms-and-conditions'; ?>">Terms & Conditions</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/gender-pay-gap'; ?>">Gender Pay Gap</a></li>
						<li><a href="<?php echo get_bloginfo('wpurl') . '/modern-slavery-act'; ?>">Modern Slavery Act</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 pbs-col">
					<h5>Social Media</h5>
					<ul>
						<li><i class="fab fa-fw fa-twitter"></i> <a href="https://twitter.com/helpmebuildit">Twitter</a></li>
						<li><i class="fab fa-fw fa-facebook-f"></i> <a href="https://www.facebook.com/helpmebuildit/">Facebook</a></li>
						<li><i class="fab fa-fw fa-linkedin-in"></i> <a href="https://www.linkedin.com/company/parker-building-supplies-ltd">LinkedIn</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 pbs-col">
					<h5>Our Location</h5>
					<ul>
						<li>Unit J1–J4 Franklin House</li>
						<li>Chaucer Business Park</li>
						<li>Dittons Road</li>
						<li>Polegate</li>
						<li>East Sussex</li>
						<li>BN26 6JF</li>
						<br>
						<li><i class="fas fa-fw fa-phone"></i> <a href="tel:08442577000">0844 257 7000</a></li>
						<li><i class="far fa-fw fa-envelope"></i> <a href="mailto:info@parkerbs.com">info@parkerbs.com</a></li>
					</ul>
				</div>
			</div>
			<div class="pbs-copyright">
				<p><?php echo '&copy;', '&nbsp;', date('Y'), '&nbsp;', 'Parker Building Supplies Limited. All Rights Reserved.'; ?></p>
			</div>
		</div>
		<span id="pbs-top-button"><i class="fas fa-chevron-up"></i></span>
	</footer>
	<!-- ./footer -->

	<!-- custom js -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/custom-jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/custom-javascript.js'; ?>"></script>
	<!-- ./custom js -->

	<!-- fontawesome icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
	<!-- ./fontawesome icons -->

	<script src="<?php echo get_template_directory_uri() . '/slick/js/slick.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/node_modules/jquery/dist/jquery.slim.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/node_modules/popper.js/dist/popper.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>

	<?php wp_footer(); ?>

</body>
</html>
