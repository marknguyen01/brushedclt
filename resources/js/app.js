require('./bootstrap');

$(document).ready(function(){
  $('.slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });
  $('.review-body').slick({
  	slidesToShow: 1,
  	slidesToScroll: 1,
  	arrows: false,
  	fade: true,
  	infinite: true,
 	useTransform: true,
  	speed: 500,
    focusOnSelect: false,
  });
  $('.review-header')
  	.on('init', function(event, slick) {
  		$('.review-header .slick-slide.slick-current').addClass('is-active');
  	})
  	.slick({
  		slidesToShow: 3,
  		slidesToScroll: 3,
  		focusOnSelect: false,
  		infinite: true,
        centerMode: true,
        arrows: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
  	});

  $('.review-body').on('afterChange', function(event, slick, currentSlide) {
  	$('.review-header').slick('slickGoTo', currentSlide);
  	var currrentNavSlideElem = '.review-header .slick-slide[data-slick-index="' + currentSlide + '"]';
  	$('.review-header .slick-slide.is-active').removeClass('is-active');
  	$(currrentNavSlideElem).addClass('is-active');
  });

  $('.review-header').on('click', '.slick-slide', function(event) {
  	event.preventDefault();
  	var goToSingleSlide = $(this).data('slick-index');
  	$('.review-body').slick('slickGoTo', goToSingleSlide);
  });

  $('.review-header').on('afterChange', function(event, slick, currentSlide) {
      $('.review-body').slick('slickGoTo', currentSlide);
      var currrentNavSlideElem = '.review-body .slick-slide[data-slick-index="' + currentSlide + '"]';
      $('.review-body .slick-slide.is-active').removeClass('is-active');
      $(currrentNavSlideElem).addClass('is-active');
  });
});
