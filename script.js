$(document).ready(function() {
 
$(window).scroll( function(){
	$('.js-fadein').each( function(i){       
    var bottom_of_object = $(this).position().top + $(this).outerHeight();
    var bottom_of_window = $(window).scrollTop() + $(window).height();
    if( bottom_of_window > bottom_of_object ){       
        $(this).animate({'opacity':'1'},600);    
        console.log('test');
      }
	}); 
 }); 
});
$('#scroll-to-register').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});