(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		// MOBILE NAVIGATION
		$('.mobile-nav-toggle').click(function() {
			$('.mobile-nav').toggleClass('mobile-nav-shown');
		})
		$('.main-nav .menu-item-has-children').hover(function() {
			$(this).children('.sub-menu').fadeToggle(200);
		});

		// $(window).scroll(function() {
    //   if ($(document).scrollTop() > 0) {
    //     $(".header").css("background-color", "rgba(100%, 100%, 100%, 1)");
    //   } else {
    //     $(".header").css("background-color", "transparent");
    //   }
    // });

	});

})(jQuery, this);
