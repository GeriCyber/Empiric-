$( document ).ready(function(){
  // Init script
  $(".button-collapse").sideNav();

  $('.chocolat-parent').Chocolat();

  new WOW().init();


  $(window).scroll(function() {
// 100 = The point you would like to fade the nav in.
	if ($(window).scrollTop() > 100 ){
 		$('nav').addClass('show');
    $('nav').addClass('z-depth-1');
    $('.logo-skynimals').addClass('hiding');
    $('nav ul a').addClass('white-text');
  } else {
    $('nav').removeClass('show');
    $('nav').removeClass('z-depth-1');
    $('nav ul a').removeClass('white-text');
    $('.logo-skynimals').removeClass('hiding');
 	};
});

$('.scroll').on('click', function(e){
		e.preventDefault()

  $('html, body').animate({
      scrollTop : $(this.hash).offset().top
    }, 1500);
});

$('a[href*=#]:not([href=#])').click(function() {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
    if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
    }
});


});
