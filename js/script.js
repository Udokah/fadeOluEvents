
/* Javascript here */

//// Play sound
/*
 function playSound(){
		   var snd = new Audio(); 
		   snd.src = 'snd/14_The_End_of_August.mp3';
		   snd.play();
            }
*/

$(document).ready(function() {
	
	////  Image Rotate
	$.fn.animateRotate = function(angle, duration, easing, complete) {
    return this.each(function() {
        var $elem = $(this);

        $({deg: 0}).animate({deg: angle}, {
            duration: duration,
            easing: easing,
            step: function(now) {
                $elem.css({
                  '-moz-transform':'rotate('+now+'deg)',
                  '-webkit-transform':'rotate('+now+'deg)',
                  '-o-transform':'rotate('+now+'deg)',
                  '-ms-transform':'rotate('+now+'deg)',
                  'transform':'rotate('+now+'deg)'
                });
            },
            complete: complete || $.noop
        });
    });
};

////  Rotate images on mouse over
$('.navigation a').mouseenter(function() {
    $(this).find('img').animateRotate(-360,1000);
});
    
});

  // Activate Scroll bar style plugin
/*
 $(document).ready(function(){
 $("html").niceScroll({styler:"fb",cursorcolor:"#DDB600"});
 });
*/
