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


	$('h1.site-title').fadeIn(800);  // Main page title fade in on load

	// NAVIGATION LABEL ACTIONS
	// $('.nav-menu a, .nav-menu-page a').mouseenter(function() {
	// 	var section = $(this).data('name');
	// 	$('.label').hide();
	// 	$('.label-' + section).fadeIn();
	// });
	// $('.nav-menu a, .nav-menu-page a').mouseleave(function() {
	// 	$('.label').hide();
	// });
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

// SKILLS SECTION ARROWS DISPLAY TEXT
$('.skill-overlay').hide();
	$('.arrow').on('click', function() {
		$(this).siblings('p').toggleClass('pSlide');
		$(this).children('.shape').toggleClass('rotate');
		$(this).siblings('img').toggleClass('seethru');
	});

	$(window).scroll(function() {

	    var position = $(window).scrollTop();

	    if(position > 400 && position < 3000) {
	    	$('.about').addClass('about-show');
	    } 
	});

	$('.overlay').on('click', function() {
		$(this).parent('.big').toggleClass('expand');
		$(this).toggleClass('moveAway');
		$(this).children('h3, .overlay-desc').toggleClass('hideLabels');
		$(this).children('.close-me').toggleClass('showLabels');
		$(this).children('.openWrap, .openWrap2').toggleClass('direction');
		$(this).children('.arrowlabel, .arrowlabel-2').toggleClass('hideExpand');
	});
		

});

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















