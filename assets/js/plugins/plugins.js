(function ($) {
    "use strict";

  //Make menu sticky
  $(window).on('scroll',function() {
    if ($(this).scrollTop() > 1){  
        $('.stick').addClass("stuck");
    }   
    else{
        $('.stick').removeClass("stuck");
    }
});

  // Handle click on toggle search button
  $('.header-search').on('click', function() {
    $('.search').toggleClass('open');
    return false;
});

//handle home page slider - slick slide
$(window).load(function() {
  $('.home-slider').slick({
    infinite: true,
    //respondTo: 'window',
    //slidesToShow: 1,
    fade: true,
    cssEase: 'linear',
    // dots: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
  });
});

})(jQuery); 

window.FontAwesomeConfig = {
  searchPseudoElements: true
}