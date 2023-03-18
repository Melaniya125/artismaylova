import Glide from '@glidejs/glide';

const Detail = class Detail {
    constructor() {
        this.slider = null;
        this.index = 0;
    }
    initSlider() {
        if (!document.querySelector('.detail-page__slider.glide')) return;

        this.slider = new Glide('.detail-page__slider.glide', {
            perView: 1,
            gap: 20,
            swipeThreshold: false,
            dragThreshold: false,
            type: 'carousel',
            animationDuration: 1500,
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

export default Detail;