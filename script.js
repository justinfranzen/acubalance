$(document).ready(function() {
    'use strict';
    
    $(window).scroll(function() {
     if ($(this).scrollTop() > 1100) {

         $("#indigo-system").animate({'opacity': '1'}, 1800);
     }
    if ($(this).scrollTop() > 1700) {

         $("#health").animate({'opacity': '1'}, 1800);
     }
        
    });
});