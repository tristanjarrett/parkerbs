
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
