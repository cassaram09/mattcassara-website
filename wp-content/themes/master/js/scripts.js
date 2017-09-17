(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
        $('#toggleNav').click(function(){
          $('.overlay').toggleClass('visible')
          $('body').toggleClass('scroll-locked')
          $('.menu-line').toggleClass('rotated')
        })

        $(window).resize(function(){
          //auto close menu if screen resizes
          if ( $(window).width() > 768 ) {
            $('.overlay').removeClass('visible')
            $('body').removeClass('scroll-locked')
            $('.menu-line').removeClass('rotated')
          } 
        });
		
	});
	
})(jQuery, this);
