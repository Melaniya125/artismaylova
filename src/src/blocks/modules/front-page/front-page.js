import Glide from '@glidejs/glide';

const FrontPage = class FrontPage {
    constructor() {
        this.slider = null;
        this.index = 0;
    }
    initSlider() {
        if (!document.querySelector('.front-page-main-menu__slider.glide')) return;

        this.slider = new Glide('.front-page-main-menu__slider.glide', {
            perView: 2,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel',
            breakpoints: {
                1131: {
                    perView: 1
                },
                0: {
                    perView: 1
                }
            },
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default FrontPage;