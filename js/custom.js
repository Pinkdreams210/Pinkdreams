$(function() {
    "use strict";
	
	
jQuery(function () {
	$(document).ready(function(){
	jQuery(document).ready(function(){
	jQuery('.skillbar02').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent02')
		},6000);
	});
});
			});
});


jQuery(function () {
		jQuery('.skillbar01').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent02')
			},6000);
			var leftSBP = ($(this).width() * $(this).find('.skill-bar-percent').attr('data-percent')) - ($(this).find('.skill-bar-percent').width());
			$(this).find('.skill-bar-percent').animate({
				left: leftSBP
			},6000);
		});
		/*var leftSBP = ($('.skillbar01').width() * $('.skill-bar-percent > span').attr('data-percent')) - ($('.skill-bar-percent > span').width() * 2);
		$('.skill-bar-percent > span').animate({
			left: leftSBP
		},6000);
		});*/		
	});

/*********FILTER Portfolio***************/

	$(function () {
		var filterList = {
			init: function () {
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all, .web, .graphic, .other'  
      		}     
				});		
			}
		};
		// Run the show!
		filterList.init();
	});	

/*********FANCY BOX***************/

		$(document).ready(function() {
			$('.fancybox').fancybox();
			 $(".various").fancybox({
				// all your API options here, whatever they are
				maxWidth: 800,
				maxHeight: 600,
				fitToView: false,
				width: '70%',
				height: '70%',
				autoSize: false,
				closeClick: false,
				openEffect: 'none',
				closeEffect: 'none',
				type: "swf" // you need to say is a swf content
			}); // fancybox
		});

		});

/*********MENU SP***************/
$('.menu-toggle, #menu li').click(function() {

  $('ul').toggleClass('opening');
  $('.menu-toggle').toggleClass('open');

});

/*********SCROLLBAR***************/
		(function($){
			$(window).load(function(){
				/* custom scrollbar fn call */				
				$(".content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);

/*********Animation***************/

$(document).ready(function () {
    $("ul[data-liffect] li").each(function (i) {
        $(this).attr("style", "-webkit-animation-delay:" + i * 300 + "ms;"
                + "-moz-animation-delay:" + i * 300 + "ms;"
                + "-o-animation-delay:" + i * 300 + "ms;"
                + "animation-delay:" + i * 300 + "ms;");
        if (i == $("ul[data-liffect] li").size() -1) {
            $("ul[data-liffect]").addClass("play")
        }
    });
});
	
$(document).ready(function () {
    $("p[data-liffect]").each(function (i) {
        $(this).attr("style", "-webkit-animation-delay:" + i * 300 + "ms;"
                + "-moz-animation-delay:" + i * 300 + "ms;"
                + "-o-animation-delay:" + i * 300 + "ms;"
                + "animation-delay:" + i * 300 + "ms;");
        if (i == $("p[data-liffect]").size() -1) {
            $("p[data-liffect]").addClass("play")
        }
    });
});
/*********Multiscroll***************/

	$(document).ready(function() {
            $('#myContainer').multiscroll({
            	anchors: ['home', 'about', 'resume', 'skill', 'portfolio', 'contact'],
            	menu: '#menu',
            	css3: true,
            	paddingTop: '60px',
            	paddingBottom: '60px',				
			'touchSensitivity': -1,
            });
        });