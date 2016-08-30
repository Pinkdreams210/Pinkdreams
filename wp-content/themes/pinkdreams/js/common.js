(function($){
	$(function(){
		$('a[href^="#"]').click(function(){
			if ( $( $(this).attr('href') ).length ) {
				var p = $( $(this).attr('href') ).offset();
				$('html,body').animate({ scrollTop: p.top }, 200);
			}
			return false;
		});
	});
})(jQuery);


/* NAVIGATION VISIBLE ON SCROLL */
$(document).ready(function () {
    navigation();

});
$(window).scroll(function () {
    navigation();	
});

function navigation() {
	var top = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
	if (top > 10){
		$('.sticky-nav').stop().animate({"top": '0'}, 0);	
	}
	else $('.sticky-nav').stop().animate({"top": '21px'}, 0);
}


$(function(){
	$("#totop").hide();			
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#totop').fadeIn();
		} else {
			$('#totop').fadeOut();
		}
	});			
	$('#totop a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});			
});