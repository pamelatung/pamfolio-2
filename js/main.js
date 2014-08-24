$(document).ready(function() {

	// navigation click actions	
	$('.nav-menu .page_item a').on('click', function(event){
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

	// $('.overlay').hover(function() {
	// 	$(this).toggleClass('transparency');
	// });
	$('.big').on('click', function() {
		$(this).toggleClass('expand');
	});
		$('.overlay').on('click', function() {
		$(this).toggleClass('transparency');
	});

	$('h1.site-title').fadeIn(800);

	$('.nav-menu a, .nav-menu-page a').mouseenter(function() {
		var section = $(this).data('name');
		$('.label').hide();
		$('.label-' + section).fadeIn();
	});
	$('.nav-menu a, .nav-menu-page a').mouseleave(function() {
		$('.label').hide();
	});

	$(window).scroll(function() {
		var position = $(window).scrollTop();

		if (position > 600 && position < 1000) {
			$('.nav-menu a, .nav-menu-page a').css('background', '#000');
		} else if (position > 1000) {
			$('.nav-menu a, .nav-menu-page a').css('background', '#FFF');
		} else {
			$('.nav-menu a, .nav-menu-page a').css('background', '#FFF');
		}
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
















