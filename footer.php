	<!-- footer -->
	<footer class="pbs-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<h5>My Account</h5>
					<ul>
						<li><a href="<?php echo site_url() . '/account-application'; ?>">Account Application</a></li>
						<!-- <li><a href="<?php echo site_url() . '/request-login'; ?>">Request Login</a></li> -->
						<li><a href="https://secure.parkerbs.com">Pay Account Online</a></li>
						<li><a href="https://account.parkerbs.com/site/login?ReturnUrl=/account/my-account?t=MyAccount">View My Account</a></li>
						<li><a href="https://account.parkerbs.com/account/password-recovery">Password Recovery</a></li>
					</ul>
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_bloginfo( 'template_directory' ) . '/images/core/logo.png'; ?>" alt="Logo" height="100">
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<h5>Information</h5>
					<ul>
						<li><a href="https://account.parkerbs.com/contact-us">Contact Us</a></li>
						<li><a href="<?php echo site_url() . '/about-us'; ?>">About Us</a></li>
						<li><a href="<?php echo site_url() . '/vacancies'; ?>">Vacancies</a></li>
						<li><a href="<?php echo site_url() . '/cookies-and-privacy'; ?>">Cookies & Privacy</a></li>
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
				<p><?php echo '&copy;', ' ', date('Y'), ' ', 'Parker Building Supplies Limited. All Rights Reserved.'; ?></p>
			</div>
		</div>
		<span id="pbs-top-button"><i class="fas fa-chevron-up"></i></span>
	</footer>
	<!-- ./footer -->

	<!-- store finder script -->
	<script type="text/javascript">
		(function(){
		  var addr = document.getElementById('gadgetAddress');
		  addr.addEventListener('keypress', function(event) {
		    if (event.keyCode == 13 && addr.value != "") {
		    	event.preventDefault();
		      gotoMapPage();
		    }
		  })
		})();

		function gotoMapPage() {
		  var address = document.getElementById("gadgetAddress").value;
		  var radius = document.getElementById("gadgetRadius").value;
		  var baseURL = "https://account.parkerbs.com/store-locator?";
		  var searchGadgetURL = "";
		  searchGadgetURL += baseURL + "address=" + address + "&radius=" + radius;
		  window.location = searchGadgetURL;
		}
	</script>

	<!-- desktop dropdown -->
	<script type="text/javascript">
		// Add class to display menu
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("pbs-show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {

				var dropdowns = document.getElementsByClassName("pbs-dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('pbs-show')) {
						openDropdown.classList.remove('pbs-show');
					}
				}
			}
		}
	</script>

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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- ./jQuery, Popper.js & Bootstrap -->

	<?php wp_footer(); ?>

	</body>
</html>
