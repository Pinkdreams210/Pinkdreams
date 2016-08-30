// submenu
//$(document).ready(function(e) {
//    $(".submenu").hide();	
//
//	$(".list-menu .sub a").click(function(){
//				$(".submenu").slideUp();		
//				$(this).parent().find(".submenu").slideToggle();
//			
//
//	});
//});

//SCROLL Navi
$(function(){
	if($(window).width() > 640 ){
		$("#navi").hide();			
		$(window).scroll(function () {
			var h_header = $("#header").height();
			if ($(this).scrollTop() > h_header+30) {
				$('#navi').fadeIn();
			} else {
				$('#navi').fadeOut();
			}
		});	
		/*		
		$('#navi ul').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 780);
			return false;
		});	*/		
	}
	
});

$(function(){	
	if($(window).width() < 640 ){
		$("#navi").hide();		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				$('#f-navi').fadeIn();
			} else {
				$('#f-navi').fadeOut();
			}
		});			
	}
});

//Scroll to top
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

	//Header Scroll
$(document).ready(function(e) {
	if($(window).width() > 768 ){
		$(window).scroll(function () {
		if ($(this).scrollTop() > 75) {
		$("#menu").addClass("scroll-fixed");
		} else {
		$("#menu").removeClass("scroll-fixed");
		}
		if ($(this).scrollTop() >= 800) {
		$("#menu").addClass("scroll-fixed2");
		} else {
		$("#menu").removeClass("scroll-fixed2");
		}
	});	
	}
    
});
//===========//
//     var $slidemenu = $("#navi");
//     jQuery(window).load(function(){
//		$("ul#nav").lavaLamp({ fx: "backout", speed: 800, clss: "li.active" });		
//		$("#navi a").hover(function() {
//		$(this).stop().animate({'width':'250px'}, 250);
//	    }, function() {
//		$(this).stop().animate({'width':'50px'}, 250);
//	    });
