function adaptation() {
    if($(window).width() < 1100) {

        $(".jsid_1").css({
            'display' : 'none'
        });

        $(".jsid_2").css({
            'width' : '100%'
        });

        $(".jsid_3").css({
            'font-size' : '30px',
            'margin' : '-40px 0 0 -350px'
        });

        $(".jsid_4").css({
            'font-size' : '30px'
        });

    } else {

      $(".jsid_1").css({
          'display' : 'block'
      });

      $(".jsid_2").css({
          'width' : '60%'
      });

      $(".jsid_3").css({
          'font-size' : '60px',
          'margin' : '-100px 0 0 -350px'
      });

      $(".jsid_4").css({
          'font-size' : '60px'
      });

    }
};

adaptation();
setInterval(adaptation, 500);



$('.jsid_5').click(function() {
    $('body,html').animate({scrollTop: $(window).height() - 30}, 800);
});


$(document).ready(function(){

		$(window).scroll(function() {
				if($(this).scrollTop() > 600) {
					 	$('.jsid_7').css({
					 			'top' : '0px'
					 	});
				} else {
					 	$('.jsid_7').css({
					 			'top' : '-70px'
					 	});
				}
		});

 });

 $('.js_mi_1').click(function() {
     $('body,html').animate({scrollTop: $(window).height() - 30}, 800);
 });

 $('.js_mi_2').click(function() {
     $('body,html').animate({scrollTop: $(window).height() + 550}, 800);
 });
