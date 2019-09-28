$(function() {
			var startFlight = 3 * $(window).height() - 200;

			$(window).scroll(function() {
						if($(this).scrollTop() < startFlight) {

							 	$(".imageClass").css({
							 			'left' : '5%',
										'transform' : 'rotate(0deg)'
							 	});

						} else {
							$(".imageClass").css({
									'left' : '80%',
									'transform' : 'rotate(360deg)'
							});
						}
			});
});
