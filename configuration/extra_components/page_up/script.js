$(function() {

		$(window).scroll(function() {
				if($(this).scrollTop() != 0) {
					 	$('.page_up').css({
					 			'bottom' : '50px'
					 	});
				} else {
					 	$('.page_up').css({
					 			'bottom' : '-50px'
					 	});
				}
		});

		$('.page_up').click(function() {
				$('body,html').animate({scrollTop: 0}, 800);
		});
});
