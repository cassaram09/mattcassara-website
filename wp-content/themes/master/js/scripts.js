(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
    $('#toggleNav').click(function(){
      $('.menu-overlay').toggleClass('visible')
      $('body').toggleClass('scroll-locked')
      $('.menu-line').toggleClass('rotated')
    })

    $(window).resize(function(){
      //auto close menu if screen resizes
      if ( $(window).width() > 768 ) {
        $('.menu-overlay').removeClass('visible')
        $('body').removeClass('scroll-locked')
        $('.menu-line').removeClass('rotated')
      } 
    });

    // $(window).scroll(function(){
    //   var header = $('#header')
    //   var title = $('#title')
    //   var mobileNav = $('#mobile-nav')

    //   if($(document).scrollTop() > 0) {
    //     if( header.data('size') == 'big' ) {
    //       header.data('size','small');
    //       $('.navigation').removeClass('small')
    //       header.removeClass('big')
    //       header.addClass('small')
    //       title.stop().animate({top:'-=14'},200);
    //       mobileNav.stop().animate({top:'-=20'},200);
    //     }
    //   } else {
    //     if( header.data('size') == 'small' ) {
    //       header.data('size','big');
    //       header.addClass('big')
    //       header.removeClass('small')
    //       title.stop().animate({top:'+=14'},200);
    //       mobileNav.stop().animate({top:'+=20'},200);
    //     }  
    //   }
    // });
		
	});
	
})(jQuery, this);
