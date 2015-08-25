"use strict";


$(function() {
	$('.hamburger').on('click', function() {

		$('.header-container').toggleClass('transition-in transition-out').removeClass('hide');
		$(this).find('i').toggleClass('fa-bars fa-times')
	});


	var removeScroll = function() {

		var screenWidth = $(window).width();
		if (screenWidth < 750) {
			$('.main').attr('id', '');
		}

		$('#fullpage').fullpage({
		  anchors:['home', 'about', 'work', 'contact']
		});

		$(window).on('resize', function() {
			var screenWidth = $(window).width();
			if (screenWidth < 750) {
				$.fn.fullpage.destroy();
			} else {
				$.fn.fullpage.reBuild();
			}
		});
	};

	removeScroll();

	var toggles = $(".hamburger");

	for (var i = toggles.length - 1; i >= 0; i--) {
		var toggle = toggles[i];
		toggleHandler(toggle);
	};

	function toggleHandler(toggle) {
		toggle.addEventListener( "click", function(e) {
		e.preventDefault();
		(this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
		});
	}

	$('.fp-section').on('click', function() {
		$(this).find('.section-content').toggleClass('show');
	});

});
