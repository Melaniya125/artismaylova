import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();
import FrontPage from '../blocks/modules/front-page/front-page.js';
import Detail from '../blocks/modules/detail/detail.js';
import Painting from '../blocks/modules/painting/painting.js';





window.app = new Vue({
    el: '#app',
    data: () => ({
        frontPage: new FrontPage(),
        detail: new Detail(),
        painting: new Painting(),


        
    }),
    mounted() {
        this.frontPage.init();
        this.detail.init();
        this.painting.init();


        
    }
});

// import PlacesAndcases from '../blocks/modules/places-and-cases/places-and-cases.js';

// window.placesAndCases = new PlacesAndcases();




// $(document).ready(function() {
//     // window.placesAndCases.init();
// });

jQuery(document).ready(function() {
    document.querySelector('.header__burger').addEventListener('click', () => {
        document.querySelector('.header__mobile').classList.add('open');
    });

    document.querySelector('.header__mobile-close').addEventListener('click', () => {
        document.querySelector('.header__mobile').classList.remove('open');
    });
})
