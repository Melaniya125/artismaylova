import * as globalFunctions from './modules/functions.js';
import Vue from 'vue/dist/vue.js';

globalFunctions.isWebp();
import FrontPage from '../blocks/modules/front-page/front-page.js';
import Detail from '../blocks/modules/detail/detail.js';




window.app = new Vue({
    el: '#app',
    data: () => ({
        frontPage: new FrontPage(),
        detail: new Detail(),

        
    }),
    mounted() {
        this.frontPage.init();
        this.detail.init();

        
    }
});

// import PlacesAndcases from '../blocks/modules/places-and-cases/places-and-cases.js';

// window.placesAndCases = new PlacesAndcases();




// $(document).ready(function() {
//     // window.placesAndCases.init();
// });