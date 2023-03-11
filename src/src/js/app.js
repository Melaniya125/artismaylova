import * as globalFunctions from './modules/functions.js';
import $ from 'jquery';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger.js";
gsap.registerPlugin(ScrollTrigger);

console.log(gsap);
console.log(ScrollTrigger);

globalFunctions.isWebp();

import PlacesAndcases from '../blocks/modules/places-and-cases/places-and-cases.js';
import Services from '../blocks/modules/services/services.js';
import Company from '../blocks/modules/company/company.js';
import Faq from '../blocks/modules/faq/faq.js';
import Modal from '../blocks/modules/modal/modal.js';
import Menu from '../blocks/modules/menu/menu.js';

window.placesAndCases = new PlacesAndcases();
window.services = new Services();
window.company = new Company();
window.faq = new Faq();
window.modal = new Modal();
window.menu = new Menu();




$(document).ready(function() {
    window.placesAndCases.init();
    window.services.init();
    window.company.init();
    window.faq.init();
    window.modal.init();
    window.menu.init();

    setTimeout(() => {
        new WOW().init();
        $('.decor').each(function() {
            gsap.to($(this), {
                y: -5000,
                rotate: 1500,
                ease: "none",
                scrollTrigger: {
                  trigger: '.wrapper',
                  start: "top bottom", // the default values
                  end: "bottom bottom",
                //   markers: true,
                  scrub: 2,
                },
            });
        })
    }, 0);

    if (window.innerWidth > 1320) {
        $(window).on('mousemove', function(e) {
            var x = e.clientX;
            var y = e.clientY;
            var windowWidth = $(window).width() / 2;
            var windowHeight = $(window).height() / 2;
            $('.translateOnMouseMove').each(function() {
                var translateSpeed = $(this).attr('data-animateSpeed');
                $(this).css({
                    transform: `translate( ${ (windowWidth - x)/translateSpeed}px, ${( windowHeight - y )/translateSpeed}px)`
                });
            });

            $('.rotateOnMouseMoveMore').each(function() {
                console.log(123123123123)
                var rotateSpeed = $(this).attr('data-animateSpeed');
                var up = $(this).attr('data-upTransform');
                $(this).css({
                    transform: `rotateX( ${ (windowHeight - y)/rotateSpeed}deg) rotateY(${( windowWidth - x )/rotateSpeed * -1 }deg) translateZ(${up}px)`
                });
                console.log(windowWidth, windowHeight)
            });
            $('.rotateOnMouseMove').each(function() {
                var rotateSpeed = $(this).attr('data-animateSpeed');
                $(this).css({
                    transform: `rotateX( ${ (windowHeight - y)/rotateSpeed}deg) rotateY(${( windowWidth - x )/rotateSpeed * -1 }deg) translateZ(-300px) scale(1.3)`
                });
            });
        });
    }
});