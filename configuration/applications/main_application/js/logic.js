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

var heightR = $(window).height();

$('.jsid_5').click(function() {
    $('body,html').animate({scrollTop: heightR}, 800);
});
