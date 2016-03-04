// remap jQuery to $
(function($){

var about_link = $('#footer-nav-about').find('a');
var contact_link = $('#footer-nav-contact').find('a');
var about_panel = $('#about-biog');
var contact_panel = $('#contact-info');
var close_panel_but = $('.side-panel').find('a.close');
var caption = $('.slide.active').find('.caption');
var info_btn = $('button.info-btn');
var event = 'click';	


/*
$('#list-view').imagesLoaded( function() {
	setTimeout(function(){ $('#loader').removeClass('active').addClass('inactive'); }, 2000);
	console.log("Done");
});
*/

var tearsheets_inner_wrap_width = $('.tearsheets > .inner-wrap').width();

$('.tearsheets > .inner-wrap').perfectScrollbar({
suppressScrollY: true,
scrollXMarginOffset: 20,
minScrollbarLength: 100
});

$('body').on(event, '#tearsheets-btn', function(e) {
	var parent = $(this).parent();
	
	if (parent.hasClass('panel-down')) {
	parent.removeClass('panel-down').addClass('panel-up');
	} else {
	parent.removeClass('panel-up').addClass('panel-down');
	}

});

$('body').on(event, 'button.info-btn', function(e){

caption = $('.slide.active').find('.caption');

if ( $(caption).hasClass('caption-hidden') ) {
$(caption).removeClass('caption-hidden').addClass('caption-visible');
}

return false;
});


$('body').on(event, '#menu-main-menu > li.with-sub-nav > a', function(e){
return false;
});

$('body').on(event, '.caption button.close-btn', function(e){

caption = $(this).parent();

$(caption).removeClass('caption-visible').addClass('caption-hidden');
$(info_btn).removeClass('btn-hidden').addClass('btn-visible');

return false;
});

$('body').on(event, ".view-btns a.side-btn", function(e){
var url = location.href;

	$(this).siblings().removeClass('btn-active');
	$(this).addClass('btn-active');
	
	if ($('.grid-view').length == 0 && $(this).attr('id') == 'grid-btn') {
	
		$( "#list-view" ).fadeOut();
		
		$('#loader').removeClass('inactive').addClass('active');
	
		$( "#list-view" ).load( url+"?view=grid .grid-view", function(){
			
			$(".fancybox").fancybox();
			$("h2.behind").removeClass('flow-on').addClass('grid-on');
			
			$('#list-view').imagesLoaded( function() {
				setTimeout(function(){ 
				$('#loader').removeClass('active').addClass('inactive'); 
				$( "#list-view" ).fadeIn();
				}, 2000);
			});
			
		});
	}

	if ($('.image-view').length == 0 && $(this).attr('id') == 'cover-flow-btn') {
	
			$( "#list-view" ).fadeOut();
		
		$('#loader').removeClass('inactive').addClass('active');
		
		$( "#list-view" ).load( url+"?view=cover-flow .image-view", function(){
		
			$("h2.behind").removeClass('grid-on').addClass('flow-on');
			
			$('#list-view').imagesLoaded( function() {
			setTimeout(function(){ 
			$('#loader').removeClass('active').addClass('inactive'); 
			$( "#list-view" ).fadeIn();
			info_btn = $('button.info-btn');
			}, 2000);
			});
			
		});
	}

return false;
});

$('body').on(event, "a#contact-link", function(e){
	
	if ( $("#wrapper").hasClass('side-closed') ) {
	
		$(this).removeClass('inactive').addClass('active');
		
		$(".side-closed").removeClass('side-closed').addClass('side-open');
		/*
$('header.side-closed').removeClass('side-closed').addClass('side-open');
		$('footer.side-closed').removeClass('side-closed').addClass('side-open');
		$(contact_panel).removeClass('side-closed').addClass('side-open');
*/
		
	} else {
	
		$(this).removeClass('active').addClass('inactive');
	
		$(".side-open").removeClass('side-open').addClass('side-closed');
	/*
	$('header.side-open').removeClass('side-open').addClass('side-closed');
		$('footer.side-open').removeClass('side-open').addClass('side-closed');
		$(contact_panel).removeClass('side-open').addClass('side-closed');
*/
	
	}
	
	return false;
	
});

$('.side-panel').on(event, 'a.close', function(e){
	
	$('a#contact-link').removeClass('active');
	$(".side-open").removeClass('side-open').addClass('side-closed');
	/*
$('header.side-open').removeClass('side-open').addClass('side-closed');
	$('footer.side-open').removeClass('side-open').addClass('side-closed');
	$('.side-panel').removeClass('side-open').addClass('side-closed');
*/
	
	return false;
	
});

$('body').on(event, '.slide', function(e){

	var index = $(this).index();
	caption = $(this).find('.caption');
	
	console.log(caption.length);
		
	if ($(this).hasClass('prev')) {
	
		if ($(this).prev().length == 1) {
		$(this).prev().addClass('prev');
		$(this).siblings('.next').removeClass('next');
		$(this).siblings('.active').removeClass('active').addClass('next');
		$(this).addClass('active').removeClass('prev');
		
		} else {
		
		$(this).parent().children('div:last-child').addClass('prev');
		$(this).siblings('.next').removeClass('next');
		$(this).siblings('.active').removeClass('active').addClass('next');
		$(this).addClass('active').removeClass('prev');
		
		}
		
	}
	
	if ($(this).hasClass('next')) {
	
		if ($(this).next().length == 1) {
			$(this).next().addClass('next');
			$(this).siblings('.prev').removeClass('prev');
			$(this).siblings('.active').removeClass('active').addClass('prev');
			$(this).addClass('active').removeClass('next');
		
			} else {
		
			$(this).parent().children('div:first-child').addClass('next');
			$(this).siblings('.prev').removeClass('prev');
			$(this).siblings('.active').removeClass('active').addClass('prev');
			$(this).addClass('active').removeClass('next');
		
			}
		
	}
		
	$(this).bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(e){
		 
		 if (caption.length == 1) {
			 $(info_btn).removeClass('btn-hidden').addClass('btn-visible');	
		 }	
		 
	 });
	
	return false;
	
});

$('body').on(event, 'button#prev-slide', function(e){
	
	var prev_slide = $('.cover-flow-view').find('div.prev');
	prev_slide.trigger(event);
	$(info_btn).removeClass('btn-visible').addClass('btn-hidden');
	$('.caption').removeClass('caption-visible').addClass('caption-hidden');
	
	return false;
	
});

$('body').on(event, 'button#next-slide', function(e){
	
	var next_slide = $('.cover-flow-view').find('div.next');
	next_slide.trigger(event);
	
	$(info_btn).removeClass('btn-visible').addClass('btn-hidden');
	$('.caption').removeClass('caption-visible').addClass('caption-hidden');
	
	return false;

});

$(document).ready(function() {
caption = $('.slide.active').find('.caption');
setTimeout(function(){ $('#loader').removeClass('active').addClass('inactive'); }, 2000);
	if (caption) {
	$('.info-btn').removeClass('btn-hidden').addClass('btn-visible');
	}
});


})(window.jQuery);