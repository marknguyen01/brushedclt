window.Popper = require('popper.js');
window.Vue = require('vue');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */
window.$ = window.jQuery = require('jquery');
require('bootstrap');


window.Cookies = require('js-cookie');

$(document).ready(function() {
    $("#preloader").fadeOut('slow', function(){
      $(this).remove();
    });
    // Check if user has not seen the popup
    // if(Cookies.get('popup') === undefined) {
    //     $('#dealModal').modal();
    //     Cookies.set('popup', true, {expires: 7})
    // }
    $('.navbar-collapse a').click(function() {
        $(".navbar-collapse").collapse('hide');
    });
    // $('.about-slider').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 1500,
    //     arrows: false,
    //     infinite: true,
    //     responsive: [{
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1,
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 576,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });
    // $('.review-body').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     fade: true,
    //     infinite: true,
    //     useTransform: true,
    //     speed: 500,
    //     focusOnSelect: false,
    // });
    // $('.review-header')
    //     .on('init', function(event, slick) {
    //         $('.review-header .slick-slide.slick-current').addClass('is-active');
    //     })
    //     .slick({
    //         slidesToShow: 3,
    //         slidesToScroll: 3,
    //         focusOnSelect: false,
    //         infinite: true,
    //         centerMode: true,
    //         arrows: false,
    //         responsive: [{
    //                 breakpoint: 992,
    //                 settings: {
    //                     slidesToShow: 3,
    //                     slidesToScroll: 3,
    //                 }
    //             },
    //             {
    //                 breakpoint: 768,
    //                 settings: {
    //                     slidesToShow: 1,
    //                     slidesToScroll: 1
    //                 }
    //             },
    //             {
    //                 breakpoint: 576,
    //                 settings: {
    //                     slidesToShow: 1,
    //                     slidesToScroll: 1
    //                 }
    //             }
    //         ]
    //     });
    //
    // $('.review-body').on('afterChange', function(event, slick, currentSlide) {
    //     $('.review-header').slick('slickGoTo', currentSlide);
    //     var currrentNavSlideElem = '.review-header .slick-slide[data-slick-index="' + currentSlide + '"]';
    //     $('.review-header .slick-slide.is-active').removeClass('is-active');
    //     $(currrentNavSlideElem).addClass('is-active');
    // });
    //
    // $('.review-header').on('click', '.slick-slide', function(event) {
    //     event.preventDefault();
    //     var goToSingleSlide = $(this).data('slick-index');
    //     $('.review-body').slick('slickGoTo', goToSingleSlide);
    // });
    //
    // $('.review-header').on('afterChange', function(event, slick, currentSlide) {
    //     $('.review-body').slick('slickGoTo', currentSlide);
    //     var currrentNavSlideElem = '.review-body .slick-slide[data-slick-index="' + currentSlide + '"]';
    //     $('.review-body .slick-slide.is-active').removeClass('is-active');
    //     $(currrentNavSlideElem).addClass('is-active');
    // });
});

window.Menu = class Menu {
    static change(el) {
        window.location = '/menu/' + el.value;
    }
}

import Parallax from "vue-parallaxy";
import * as VueGoogleMaps from "vue2-google-maps";

Vue.component('service-component', require('./components/ServiceComponent.vue').default);
Vue.component('review-component', require('./components/ReviewComponent.vue').default);
Vue.component('team-component', require('./components/TeamComponent.vue').default);
Vue.component('contact-component', require('./components/COntactComponent.vue').default);

Vue.use(Parallax);

Vue.use(VueGoogleMaps, {
    load: {
        key: "AIzaSyA0ADDoM8I2FpsEFB41nfnNGdSBt96ZvX8"
    },
    installComponents: true
});

Vue.config.ignoredElements = ['ion-icon'];

new Vue({
  components: {Parallax},
  el: '#app'
})
