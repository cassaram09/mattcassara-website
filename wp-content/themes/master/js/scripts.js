(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
    $('#toggleNav').click(function(){
      $('.menu-overlay').toggleClass('visible')
      $('body').toggleClass('scroll-locked')
    })
		
	});
	
})(jQuery, this);
