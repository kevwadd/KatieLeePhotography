// remap jQuery to $
(function($){

var ua = navigator.userAgent, event = (ua.match(/iPad/i)) ? "touchstart" : "click";

var main_nav = $("nav[role=main-nav]");
var main_nav_links = main_nav.find('a');
var footer_nav = $("nav[role=footer-nav]");
var container = $('#container');
var boxes = $('#container').find('.box');
var loader = $('#loader');
var all_images = [];

function build_grid (){

	container.imagesLoaded( function(){
		
		container.masonry({
	      itemSelector: '.box',
	      columnWidth: 240,
	      gutterWidth: 20,
	      isFitWidth: true,
	      isAnimated: !Modernizr.csstransitions,
	      animationOptions: {
	        duration: 500,
	        complete: function() {
	        	fleXenv.updateScrollBars();
	        }
	      }
	    }); 
	    
	    fleXenv.updateScrollBars();
	    loader.fadeOut(2000);
	    
	});

};

$(boxes).bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){ 
	fleXenv.updateScrollBars(); 
});

build_grid();
		
var klp = $.sammy('#main-content', function(e) {

	//Home page
     this.get('#/', function(context) {
     
     main_nav.find('li').removeClass('active');
     footer_nav.find('li').removeClass('active');
     	 
     	 if (all_images.length == 0) {
     	 	
     	 	boxes.each(function(){
     	 		all_images.push(this);
     	 	});
     	 	
     	 	build_grid();
     	 	
     	 } else {
     	 
     	 	container.empty();
     	 	
     	 	all_images.filter(function(index) {
     	 	
     	 	var elem = $( index );
     	 	
     	 	if ( elem.is(":hidden") ) {
     	 		elem.show();
     	 	}
   				
			container.append( elem );
			build_grid();
			
			});		
     	 
     	 }     	
     	//END OF GET HOME PAGE
      });
      
     //Press
     this.get('#/portfolio/:images', function(context) {
     	  var portfolio = this.params['images']; 
     	  
     	  main_nav.find('li').removeClass('active');
     	  footer_nav.find('li').removeClass('active');
     	  main_nav.find('li#main-nav-'+portfolio).addClass('active');
     	  
     	  if (all_images.length == 0) {
     	 	
     	 	boxes.each(function(index, value){
     	 		
     	 		all_images.push(value);
     	 		
     	 		if ( !$(value).hasClass(portfolio) ) {
     	 			
     	 			$(value).hide().remove();
     	 			build_grid();
     	 		}
     	 		
     	 	});
     	 	
     	 } else {
     	 
     	 	container.empty();
     	 	
     	 	all_images.filter(function(index) {
     	 	
     	 	var elem = $( index );
     	 	
     	 		if ( elem.hasClass(portfolio) ) {
     	 			
     	 			container.append( elem );
     	 			build_grid();
     	 			fleXenv.updateScrollBars();
     	 		}
   							
			});		
     	 
     	 }     	
     	  
     	   build_grid();    	
     	//END OF GET IMAGES
      });
      
      //About
     this.get('#/about', function(context) {
     
     	if (all_images.length == 0) {
     	 	
     	 	boxes.each(function(index, value){
     	 		
     	 		all_images.push(value); 		
     	 	});
     	 	
     	 }
     
     	main_nav.find('li').removeClass('active');
     	footer_nav.find('li').removeClass('active');
     	footer_nav.find('li#footer-nav-about').addClass('active');
     	
     	 console.log(context);       	
     	//END OF GET ABOUT PAGE
      });
      
       //Contact
     this.get('#/contact', function(context) {
     
     if (all_images.length == 0) {
     	 	
     	 	boxes.each(function(index, value){
     	 		
     	 		all_images.push(value); 		
     	 	});
     	 	
     	 }
     
     main_nav.find('li').removeClass('active');
     footer_nav.find('li').removeClass('active');
     footer_nav.find('li#footer-nav-contact').addClass('active');
     
     
     	 console.log(context);       	
     	//END OF GET CONTACT PAGE
      });


 //END
}); 

klp.run('#/');
	  

})(window.jQuery);