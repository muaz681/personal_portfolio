/*================================================
[  Table of contents  ]
================================================

	01. jQuery Mobile MeanMenu
	02. Slider Active
	03. Department Active
	04. Testimonial Owl Active
	05. Participant Active
	06. Gallery Iostop Active
	07. Magnific Popup For Video
	08. Counter Up
	09. TOP Menu Stick
	10. scrollUp

================================================*/

(function ($) {
 "use strict";

	/*------ 01. jQuery Mobile MeanMenu ------*/
	jQuery('#mobile-nav').meanmenu();

	/*------ 02. Slider Active ------*/
	$('.slider-active').owlCarousel({
		items:1,
		margin:0,
		autoHeight:true,
        autoplay:true,
        autoplayTimeout:6000,
		dots:false,
        loop:true,
	});

	/*------ 03. Department Active ------*/
	$('.department-active').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		dots:false,
		navText:["<i class='zmdi zmdi-long-arrow-left'></i>","<i class='zmdi zmdi-long-arrow-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			600:{
				items:1
			},
			768:{
				items:2
			},
			1000:{
				items:4
			}
		}
	})

	/*------ 04. Testimonial Owl Active ------*/
	$('.testimonial-active').owlCarousel({
		stagePadding: 70,
		loop:true,
		margin:80,
		nav:false,
		dots:true,
		responsive:{
			0:{
				stagePadding: 0,
				margin:0,
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:2
			}
		}
	})

	/*------ 05. Participant Active ------*/
	$('.participent-active').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots:false,
		navText:["<i class='zmdi zmdi-long-arrow-left'></i>","<i class='zmdi zmdi-long-arrow-right'></i>"],
		responsive:{
			0:{
				items:2
			},
			480:{
				items:3
			},
			600:{
				items:4
			},
			768:{
				items:4
			},
			1000:{
				items:4
			}
		}
	})

	/*------ 06. Gallery Iostop Active ------*/

$(document).ready(function(){
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });
  });

	// images have loaded
	$('.gallery-box').imagesLoaded( function() {
	  // Isotop Active
	  $('.gallery-menu').on( 'click', 'li', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	  });

	  // Isotop Full Grid
	  var $grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
		columnWidth: '.grid-item',
		}
	  });
	  // Isotop Menu Active
	  $('.gallery-menu li').on('click', function(event) {
			$(this).siblings('.active').removeClass('active');
			$(this).addClass('active');
			event.preventDefault();
		});
	});

	/*------ 07. Magnific Popup For Video ------*/
	$('.popup-gallery').magnificPopup({
		type: 'image'
	});

	/*------ 08. Counter Up ------*/
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	/*------ 09. TOP Menu Stick ------*/
	var wstick = $(window);
	wstick.on('scroll',function() {
	   var scroll = wstick.scrollTop();
	   if (scroll < 245) {
		$("#sticky-header").removeClass("sticky");
	   }else{
		$("#sticky-header").addClass("sticky");
	   }
	});

	/*------ 10. scrollUp ------*/
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});

})(jQuery);
