require('./bootstrap');

$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
});
