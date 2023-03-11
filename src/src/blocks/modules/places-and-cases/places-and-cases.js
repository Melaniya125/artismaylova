import 'owl.carousel.es6';
import $ from 'jquery';

const PlacesAndcases = class PlacesAndcases {
    constructor() {}
    initPlacesSlider() {
        $('.places-block').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            dots: false,
            items: 4,
            navText: [$('.places-block__top-arrows .global__arrow--next'),$('.places-block__top-arrows .global__arrow--prev')],
            responsive : {
                // breakpoint from 0 up
                1320 : {
                    items : 4,
                },
                840 : {
                    items : 3,
                },
                640 : {
                    items : 2,
                },
                0 : {
                    items : 1,
                    margin: 0
                },
            }
        });
        if (window.innerWidth > 1320 && $('.places-block-item').length > 4) {
            $('.places-block').find('.owl-nav').appendTo('.places-block__top .places-block__top-arrows');
        }
    }
    initInsideSliders() {
        document.querySelectorAll('.cases-block-item-slider').forEach((element) => {
            $(element).owlCarousel({
                loop: false,
                margin: 20,
                nav: false,
                dots: true,
                items: 1,
                autoplay: true,          
            });
        })
    }
    initMainSlider() {
        
        $('.cases-block').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            touchDrag: false,
            items: 2,
            navText: [$('.cases-block__top-arrows .global__arrow--next'),$('.cases-block__top-arrows .global__arrow--prev')],
            responsive : {
                // breakpoint from 0 up
                1320 : {
                    items : 2,
                },
                0 : {
                    items : 1,
                    margin: 0
                },
            }
        });
        if (window.innerWidth > 1320) {
            $('.cases-block').find('.owl-nav').appendTo('.cases-block__top .cases-block__top-arrows');
        }
    }
    init() {
        this.initMainSlider();
        this.initPlacesSlider();
        this.initInsideSliders();
    }
}

export default PlacesAndcases;