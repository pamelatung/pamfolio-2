$(document).ready(function() {

	// navigation click actions	
	$('.nav-menu .page_item a, .skills-footer svg').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 750);
	});
	// scroll to top action
	$('.current_page_item').on('click', function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop:0}, 'slow'); 		
	});
	// mobile nav toggle
	$('#nav-toggle').on('click', function (event) {
		event.preventDefault();
		$('#main-nav').toggleClass("open");
	});

	// DETECTS WHICH SECTION IS ON SCREEN
	$.fn.isOnScreen = function(x, y){
	             
	  if(x == null || typeof x == 'undefined') x = 1;
	  if(y == null || typeof y == 'undefined') y = 1;

	  var win = $(window);

	  var viewport = {
	       top : win.scrollTop(),
	       left : win.scrollLeft()
	  };
	  viewport.right = viewport.left + win.width();
	  viewport.bottom = viewport.top + win.height();

	  var height = this.outerHeight();
	  var width = this.outerWidth();

	  if(!width || !height){
	       return false;
	  }

	  var bounds = this.offset();
	  bounds.right = bounds.left + width;
	  bounds.bottom = bounds.top + height;

	  var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

	  if(!visible){
	       return false;   
	  }

	  var deltas = {
	       top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
	       bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
	       left : Math.min(1, ( bounds.right - viewport.left ) / width),
	       right : Math.min(1, ( viewport.right - bounds.left ) / width)
	  };

	  return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y; 
	};
	// END DETECT SECTION

	$(window).scroll(function() {

    var position = $(window).scrollTop();

    var $otherDots = $('.nav-menu a');
    // var dotColor = $('.nav-menu a').data('color');

    if ($('.site-branding-hero').isOnScreen(0.5,0.5)) {
    	$otherDots.css('background', '#FFF');
    	$('.nav-menu li:nth-child(1) a').css('background', 'red');

    } else if($('#about').isOnScreen(0.5,0.5)) {
    	$otherDots.css('background', '#FFF');
    	$('.nav-menu li:nth-child(2) a').css('background', 'gold');

    } else if ($('#skills').isOnScreen(0.5,0.5)) {
    	$otherDots.css('background', '#FFF');
    	$('.nav-menu li:nth-child(3) a').css('background', 'turquoise');

    } else if ($('#portfolio').isOnScreen(0.5,0.5)) {
    	$otherDots.css('background', '#FFF');
    	$('.nav-menu li:nth-child(4) a').css('background', 'salmon');

    } else if ($('#contact').isOnScreen(0.5,0.5)) {
    	$otherDots.css('background', '#FFF');
    	$('.nav-menu li:nth-child(5) a').css('background', 'blue');
    }

	});

	$('h1.site-title').fadeIn(800);  // Main page title fade in on load

	var $dot = $('.nav-menu a, .nav-menu-page a');

	$dot.mouseenter(function() {
		var section = $(this).data('name');
		$('.label').hide();
		$('.label-' + section).fadeIn();
	});
	$dot.mouseleave(function() { 
		$('.label').hide();
	});

	$dot.on('click', function() {
		$dot.css('background-color', '#FFF');
		var colorID = $(this).data('color');
		$(this).css('background-color', colorID);
	});

// SKILLS SECTION DISPLAY TEXT - ARROWS
$('.skill-overlay').hide();
	$('.arrow').on('click', function() {
		$(this).siblings('p').toggleClass('pSlide');
		$(this).children('.shape').toggleClass('rotate');
		$(this).siblings('img').toggleClass('seethru');
	});

	$('.overlay').on('click', function() {
		$(this).parent('.big').toggleClass('expand');
		$(this).toggleClass('moveAway');
		$(this).children('h3, .overlay-desc').toggleClass('hideLabels');
		$(this).children('.close-me').toggleClass('showLabels');
		$(this).children('.openWrap, .openWrap2').toggleClass('direction');
		$(this).children('.arrowlabel, .arrowlabel-2').toggleClass('hideExpand');
	});

}); // END DOCUMENT READY FUNCTION

// scroll function
function scrollToID(id, speed){
	var offSet = 0;
	var targetOffset = $(id).offset().top - offSet;
	var mainNav = $('#main-nav');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	if (mainNav.hasClass("open")) {
		mainNav.css("height", "1px").removeClass("in").addClass("collapse");
		mainNav.removeClass("open");
	}
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}















