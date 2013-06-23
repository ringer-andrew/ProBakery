jQuery(function($){

var ANUBIS = window.ANUBIS || {};

/* ==================================================
   Drop Menu
================================================== */

ANUBIS.subMenu = function(){
	$('#menu-nav').supersubs({
		minWidth: 12,
		maxWidth: 27,
		extraWidth: 0 // set to 1 if lines turn over
	}).superfish({
		delay: 0,
		animation: {opacity:'show'},
		speed: 'fast',
		autoArrows: false,
		dropShadows: false
	});	
}

/* ==================================================
   Mobile Navigation
================================================== */
/* Clone Menu for use later */
var mobileMenuClone = $('#menu').clone().attr('id', 'navigation-mobile');

ANUBIS.mobileNav = function(){
	var windowWidth = $(window).width();
	
	// Show Menu or Hide the Menu
	if( windowWidth <= 979 ) {
		if( $('#mobile-nav').length > 0 ) {
			mobileMenuClone.insertAfter('header');
			$('#navigation-mobile #menu-nav').attr('id', 'menu-nav-mobile').wrap('<div class="container"><div class="row"><div class="span12" />');
		}
	} else {
		$('#navigation-mobile').css('display', 'none');
		if ($('#mobile-nav').hasClass('open')) {
			$('#mobile-nav').removeClass('open');	
		}
	}
}

// Call the Event for Menu 
ANUBIS.listenerMenu = function(){
	$('#mobile-nav').on('click', function(e){
		$(this).toggleClass('open');
		
		$('#navigation-mobile').stop().slideToggle(350, 'easeOutExpo');
		
		e.preventDefault();
	});
}

/* ==================================================
   Hover for Touch Devices
================================================== */

// Fix Hover on Touch Devices
ANUBIS.utils = function(){
	
	$('.work-item-thumbs, .box, .post-thumb, .single-people, .item-project, .lightbox').bind('touchstart', function(){
		$(".tapped").removeClass("tapped");
      	$(this).addClass('tapped');
    });
	
}

/* ==================================================
   DropDown 
================================================== */

ANUBIS.dropDown = function(){
	$('.dropmenu').on('click', function(e){
		$(this).toggleClass('open');
		
		$('.dropmenu-active').stop().slideToggle(350, 'easeOutExpo');
		
		e.preventDefault();
	});
	
	$('.dropmenu-active a').on('click', function(e){
		var dropdown = $(this).parents('.dropdown');
		var selected = dropdown.find('.dropmenu .selected');
		var newSelect = $(this).html();
		
		$('.dropmenu').removeClass('open');
		$('.dropmenu-active').slideUp(350, 'easeOutExpo');
		
		selected.html(newSelect);
		
		e.preventDefault();
	});
}

/* ==================================================
   Accordion
================================================== */

ANUBIS.accordion = function(){
	var accordion_trigger = $('.accordion-heading.accordionize');
	
	accordion_trigger.delegate('.accordion-toggle','click', function(e){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		   	$(this).addClass('inactive');
		}
		else{
		  	accordion_trigger.find('.active').addClass('inactive');          
		  	accordion_trigger.find('.active').removeClass('active');   
		  	$(this).removeClass('inactive');
		  	$(this).addClass('active');
	 	}
		e.preventDefault();
	});
}

/* ==================================================
   Toggle
================================================== */

ANUBIS.toggle = function(){
	var accordion_trigger_toggle = $('.accordion-heading.togglize');
	
	accordion_trigger_toggle.delegate('.accordion-toggle','click', function(e){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		   	$(this).addClass('inactive');
		}
		else{
		  	$(this).removeClass('inactive');
		  	$(this).addClass('active');
	 	}
		e.preventDefault();
	});
}


/* ==================================================
	Scroll to Top
================================================== */

ANUBIS.scrollToTop = function(){
	var didScroll = false;

	var $arrow = $('#back-to-top');

	$arrow.click(function(e) {
		$('body,html').animate({ scrollTop: "0" }, 750, 'easeOutExpo' );
		e.preventDefault();
	})

	$(window).scroll(function() {
		didScroll = true;
	});

	setInterval(function() {
		if( didScroll ) {
			didScroll = false;

			if( $(window).scrollTop() > 1000 ) {
				$arrow.css('display', 'block');
			} else {
				$arrow.css('display', 'none');
			}
		}
	}, 250);
}


/* ==================================================
	Center Images
================================================== */

ANUBIS.getSize = function(){
	
	if($('#image-static .fullimage-container').length > 0){
		$('#image-static .fullimage-container').each(function() {
			
			var img = $(this).find('img');	
			
			// Get on screen image
			var screenImage = img;
	
			// Create new offscreen image to test
			var theImage = new Image();
			theImage.src = screenImage.attr("src");
	
			// Get accurate measurements from that.
			var imageWidth = theImage.width;
			var imageHeight = theImage.height;
			
			screenImage.attr('width', imageWidth);
			screenImage.attr('height', imageHeight);
		});
	}
	
}

ANUBIS.centerImg = function(){
	if($('#image-static .fullimage-container').length > 0){
		$('#image-static .fullimage-container').each(function(){
			var img = $(this).find('img'),
				vpWidth = $(window).width(),
				vpHeight,
				imgHeight = img.attr('height'),
				imgWidth = img.attr('width'),
				imgAspectRatio = imgWidth / imgHeight,
				vpAspectRatio,
				newImgWidth,
				newImgHeight = vpWidth / imgAspectRatio;
		
			if( vpWidth <= 660 ) {
				vpHeight = 400;
				newImgWidth = imgWidth * vpHeight / imgHeight;
			} else if( vpWidth > 660 && vpWidth <= 1024 ) {
				vpHeight = 500;
				newImgWidth = imgWidth * vpHeight / imgHeight;
			} else {
				vpHeight = 700;
				newImgWidth = imgWidth * vpHeight / imgHeight;
			}
			
			vpAspectRatio = vpWidth / vpHeight;
									
			if( vpAspectRatio <= imgAspectRatio ) {
				img.css({
					'margin-top': 0,
					'width': newImgWidth,
					'height': '100%',
					'margin-left': (vpWidth - newImgWidth)/2
				});
			} else {
				img.css({
					'width': '100%',
					'height': newImgHeight,
					'margin-left': 'auto',
					'margin-top': (vpHeight - newImgHeight)/2
				});
			}
		});
	}
}

/* ==================================================
   Opacity Slider Elements on Scroll
================================================== */

ANUBIS.changeOpacity = function(){
	var arrows = $('.fullwidthbanner-container .tparrows, .fullwidthbanner-container .tp-bullets');
	
	$(window).scroll(function(){
		var st = $(this).scrollTop();
		arrows.css({ 'opacity' : (1 - st/600) });
	});
}


/* ==================================================
	Init
================================================== */

$(document).ready(function(){
	ANUBIS.utils();
	
	ANUBIS.getSize();
	ANUBIS.centerImg();
	
	ANUBIS.mobileNav();
	ANUBIS.listenerMenu();
	ANUBIS.subMenu();
	ANUBIS.dropDown();
	ANUBIS.accordion();
	ANUBIS.toggle();
	ANUBIS.scrollToTop();
	ANUBIS.changeOpacity();
});

$(window).resize(function(){
	ANUBIS.centerImg();
	ANUBIS.mobileNav();
});

});
