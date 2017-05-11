(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here

		//scrollto

		$('#menu-main-menu a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html, body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		});

		$('.slider-bottom').slick({
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: true
		});


		//Menu scroll

		$(window).scroll(function() {
			
			var navBar = $('.navbar').height();

			if($(window).scrollTop() > navBar){

				$('.navbar').addClass('navbar-fixed-top');
			
			} else {
				
				$('.navbar').removeClass('navbar-fixed-top');
			
			}
		});

	});

}(jQuery));
