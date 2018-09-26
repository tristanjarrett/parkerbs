	<!-- footer -->
	<footer class="pbs-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<h5>My Account</h5>
					<ul>
						<li><a href="#">Account Application</a></li>
						<li><a href="#">Request Login</a></li>
						<li><a href="#">View My Account</a></li>
						<li><a href="#">Password Recovery</a></li>
					</ul>
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/logo.png'; ?>" alt="Logo" height="100">
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<h5>Information</h5>
					<ul>
						<li><a href="<?php echo site_url() . '/contact-us'; ?>">Contact Us</a></li>
						<li><a href="<?php echo site_url() . '/about-us'; ?>">About Us</a></li>
						<li><a href="<?php echo site_url() . '/vacancies'; ?>">Vacancies</a></li>
						<li><a href="<?php echo site_url() . '/privacy-policy'; ?>">Privacy Policy</a></li>
						<li><a href="<?php echo site_url() . '/terms-and-conditions'; ?>">Terms & Conditions</a></li>
						<li><a href="<?php echo site_url() . '/gender-pay-gap'; ?>">Gender Pay Gap</a></li>
						<li><a href="<?php echo site_url() . '/modern-slavery-act'; ?>">Modern Slavery Act</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3">
					<h5>Social Media</h5>
					<ul>
						<li><i class="fab fa-fw fa-twitter"></i> <a href="https://twitter.com/helpmebuildit">Twitter</a></li>
						<li><i class="fab fa-fw fa-facebook-f"></i> <a href="https://www.facebook.com/helpmebuildit/">Facebook</a></li>
						<li><i class="fab fa-fw fa-linkedin-in"></i> <a href="https://www.linkedin.com/company/parker-building-supplies-ltd">LinkedIn</a></li>
					</ul>
				</div>
				<div class="col-sm-6 col-lg-3">
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
				<p><?php echo '&copy;', '&nbsp;', get_the_date('Y'), '&nbsp;', 'Parker Building Supplies Limited. All Rights Reserved.'; ?></p>
			</div>
		</div>
		<span id="pbs-top-button"><i class="fas fa-chevron-up"></i></span>
	</footer>
	<!-- ./footer -->

	<!-- custom js -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/custom.js'; ?>"></script>
	<!-- ./custom js -->

	<!-- fontawesome icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
	<!-- ./fontawesome icons -->

	<!-- slick -->
	<script src="<?php echo get_template_directory_uri() . '/assets/slick/js/slick.min.js'; ?>"></script>
	<!-- ./slick -->

	<!-- jQuery, Popper.js & Bootstrap -->
	<script src="<?php echo get_template_directory_uri() . '/js/jquery/jquery.slim.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/popper.js/popper.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js'; ?>"></script>
	<!-- ./jQuery, Popper.js & Bootstrap -->

	<?php wp_footer(); ?>

	</body>
</html>
