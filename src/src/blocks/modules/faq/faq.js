import $ from 'jquery';
const Faq = class Faq {
    constructor(){}
    initAccordeon() {
        $('.faq-block__item-title').click(function() {
            // $('.faq-block__item-title.isOpened').removeClass('.isOpened').siblings('.answer').slideUp();
            $(this).toggleClass('isOpened').siblings('.answer').slideToggle();
        })
    }
    init() {
        this.initAccordeon();
    }
}

export default Faq;