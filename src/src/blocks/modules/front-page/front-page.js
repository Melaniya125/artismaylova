import Glide from '@glidejs/glide';

const FrontPage = class FrontPage {
    constructor() {
        this.slider = null;
        this.index = 0;
    }
    initSlider() {
        if (!document.querySelector('.front-page-main-menu__slider.glide')) return;

        this.slider = new Glide('.front-page-main-menu__slider.glide', {
            perView: 1,
            gap: 20,
            swipeThreshold: true,
            dragThreshold: false,
            type: 'carousel',
            animationDuration: 1500,
            breakpoints: {
                1131: {
                    perView: 1
                },
                991: {
                    perView: 1,
                    autoplay: 3000
                }
            },
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default FrontPage;