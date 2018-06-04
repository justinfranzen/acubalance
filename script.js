$(document).ready(function() {
    'use strict';
    
    var top = 80;
    
$(window).on('scroll', function () {
    if ($(window).scrollTop() >= top) {
            // if so, add the blue class
            $('#header').css({background: '#d7e2f1'});
            $('#header').addClass('transition');    
        } else {
            $('#header').css({background: 'transparent'});
            $('#header').addClass('transition');
        }
    });
    
    $(window).scroll(function() {
     if ($(this).scrollTop() > 1100) {

         $("#indigo-system").animate({'opacity': '1'}, 1800);
     }
    if ($(this).scrollTop() > 1700) {

         $("#health").animate({'opacity': '1'}, 1800);
     }
        
    });

});