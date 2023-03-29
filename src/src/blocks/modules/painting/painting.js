import Glide from '@glidejs/glide';

const Painting = class Painting {
    constructor() {
        this.slider = null;
        this.index = 0;
    }
    initSlider() {
        if (!document.querySelector('.painting__slider.glide')) return;

        this.slider = new Glide('.painting__slider.glide', {
            perView: 3,
            gap: 100,
            swipeThreshold: true,
            dragThreshold: false,
            type: 'carousel',
            animationDuration: 1500,
            breakpoints: {
                1560: {
                    gap: 40,
                    perView: 3,
                },
                1150: {
                    perView: 2,
                },
                991: {
                    perView: 1,
                    autoplay: 0
                }
            },
        }).mount()
    }
    init() {
        this.initSlider();
    }
}

export default Painting;