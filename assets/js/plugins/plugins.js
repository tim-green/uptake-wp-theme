(function ($) {
    "use strict";

  // Handle click on toggle search button
  $('.header-search').on('click', function() {
    $('.search').toggleClass('open');
    return false;
});

//handle home page slider - slick slide
$(window).load(function() {
  $('.home-slider').slick({
    infinite: true,
    respondTo: 'window',
    lazyLoad: 'progressive',
    slidesToShow: 1,
    // dots: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
  });
});

})(jQuery); 