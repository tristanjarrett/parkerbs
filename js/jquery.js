// WordPress jQuery fix
(function($) {
// all jQuery BELOW this line
// ++++++++++++++++++++++++++

	// slick slider settings
	$(document).ready(function(){
		$('#pbs-logo-slide').slick({
			slidesToShow: 8,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			speed: 300,
			arrows: false,
			dots: false,
			draggable: false,
			pauseOnHover: false,
			infinite: true,
			pauseOnFocus: false,
			responsive: [{
				breakpoint: 1439.98, // custom breakpoint xxl
				settings: {
					slidesToShow: 8
				}
			}, {
				breakpoint: 1365.98, // custom breakpoint xl
				settings: {
					slidesToShow: 7
				}
			}, {
				breakpoint: 1199.98, // bootstrap 4 breakpoint lg
				settings: {
					slidesToShow: 6
				}
			}, {
				breakpoint: 991.98, // bootstrap 4 breakpoint md
				settings: {
					slidesToShow: 5
				}
			}, {
				breakpoint: 767.98, // bootstrap 4 breakpoint sm
				settings: {
					slidesToShow: 3
				}
			}, {
				breakpoint: 575.98, // bootstrap 4 breakpoint xs
				settings: {
					slidesToShow: 2
				}
			}]
		});
	});

	// back to top button
	$(document).ready(function(){
		// variables
    var offset = 100;
    var speed = 500;
    var duration = 500;
		// button display
	  $(window).scroll(function(){
    	if ($(this).scrollTop() < offset) {
			 $('#pbs-top-button').fadeOut(duration);
      } else {
			 $('#pbs-top-button').fadeIn(duration);
      }
    });
		// button function
		$('#pbs-top-button').on('click', function(){
			$('html, body').animate({scrollTop:0}, speed);
			return false;
		});
	});

// ++++++++++++++++++++++++++
// all jQuery ABOVE this line
})(jQuery);
