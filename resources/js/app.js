require('./bootstrap');

import bootstrap from 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@fortawesome/fontawesome-free/js/brands.min'
import '@fortawesome/fontawesome-free/js/fontawesome.min'
import '@fortawesome/fontawesome-free/js/solid.min'


// slider
import '@splidejs/splide/dist/css/splide.min.css'
import '@splidejs/splide/dist/css/themes/splide-default.min.css'
import Splide from '@splidejs/splide';

let partnersSwiper = new Splide( '.partners__swiper', {
    type   : 'loop',
    perPage: 4,
    pagination  : false,
    padding: {
        right: '5rem',
        left : '5rem',
    },

    classes: {
        arrow : 'partners__swiper-arrow',
        prev  : 'partners__swiper-prev',
        next  : 'partners__swiper-next',
    },
}).mount();

let teamSwiper = new Splide( '.team__swiper', {
    type   : 'loop',
    perPage: 3,
    pagination  : false,
    classes: {
        arrow : 'partners__swiper-arrow',
        prev  : 'partners__swiper-prev',
        next  : 'partners__swiper-next',
    },
}).mount();
