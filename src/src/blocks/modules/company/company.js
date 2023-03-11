import $ from 'jquery';

const Company = class Company {
    constructor() {}
    initPartnersSlider() {
        $('.brands-slider').owlCarousel({
            loop: false,
            margin: 20,
            nav: false,
            dots: true,
            items: 5,
            responsive : {
                // breakpoint from 0 up
                1320 : {
                    items : 5,
                },
                840 : {
                    items : 4,
                },
                640 : {
                    items : 3,
                },
                480 : {
                    items : 1,
                    dots: false,
                },
                0 : {
                    items : 1,
                },
            }
        });
    }
    initReviewsSlider() {
        $('.reviews-block__in').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            dots: false,
            items: 1,
            navText: [$('<div class="global__arrow--next">'),$('<div class="global__arrow--prev">')],
        });
    }
    init() {
        this.initPartnersSlider();
        this.initReviewsSlider();
    }
}

export default Company;