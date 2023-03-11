import $ from 'jquery';

const Menu = class Menu {
    constructor() {}
    addMenuOpenHandler() {
        $('.menuOpener').each(function() {
            $(this).on('click', function() {
                $(this).toggleClass('isOpened');
                $('html, body').toggleClass('isOverflowed');
                $('.mobileMenu').toggleClass('isOpened');
                $('html, body').scrollTop(0)
            });
        })
    }
    init() {
        this.addMenuOpenHandler();
    }
    
}

export default Menu;