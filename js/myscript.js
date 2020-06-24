// JS File For Sticker Menu -->
$(document).ready(function() {
	var s = $("#sticker");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top) {
			s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});
});

// JS File For Responsive Menu
domready(function(){
	selectnav('menu-main-menu', {
		label: 'Select Menu'
	});
	prettyPrint();
});

// JS File For Slider -->
jQuery(document).ready(function($) {
  
	 $('#banner-slide').bjqs({
		animtype      : 'slide',
		height        : 500,
		width         : 958,
		responsive    : true,
		randomstart   : false
	 });
  
});

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/