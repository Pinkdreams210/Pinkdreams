(function($){
	$(function(){
		$('a[href^="#"]').click(function(){
			if ( $( $(this).attr('href') ).length ) {
				var p = $( $(this).attr('href') ).offset();
				$('html,body').animate({ scrollTop: p.top }, 1000,"swing");
			}
			return false;
		});
	});
})(jQuery);
